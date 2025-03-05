<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use App\Models\Sales;
use App\Models\Points;
use App\Models\User;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Auth;

class SalesForm extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $quantity;
    public $user_id;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationGroup = 'Penjualan';
    protected static string $view = 'filament.pages.sales-form';
    protected static ?string $navigationLabel = 'Form Total Penjualan';

    public function mount($user = null): void
    {
        $this->user_id = $user;
    }
    public bool $isLoading = false;

    public function getTitle(): string
    {
        return 'Form Rekap Total Penjualan perhari';
    }

    protected function getFormSchema(): array
    {
        return [
           Card::make([
        Select::make('user_id')
            ->label('Pilih Pengguna')
            ->options(User::all()->pluck('name', 'id')->toArray())
            ->searchable()
            ->default($this->user_id)
            ->required(),
        TextInput::make('quantity')
            ->label('Jumlah Penjualan')
            ->numeric()
            ->minValue(1)
            ->validationAttribute('Jumlah Penjualan harus positif')
            ->required(),
           ])
        ];
    }

    public function submit(): void
    {
        $data = $this->form->getState();
        $quantity = (int) $data['quantity'];
        $userId = (int) $data['user_id'];

        if ($quantity <= 0) {
            Notification::make()
                ->title('Invalid input')
                ->body('Jumlah Penjualan harus positif.')
                ->danger()
                ->send();
            return;
        }

        $user = User::find($userId);
        if (! $user) {
            Notification::make()
                ->title('Pengguna tidak ditemukan.')
                ->danger()
                ->send();
            return;
        }

        $pointRecord = Points::firstOrCreate(
            ['user_id' => $user->id],
            ['points'  => 0]
        );

        $pointsPerSale = $this->calculatePointsPerSale();

        $pointsEarned = $quantity * $pointsPerSale;

        Sales::create([
            'user_id'       => $user->id,
            'quantity'      => $quantity,
            'points_earned' => $pointsEarned,
        ]);

        $pointRecord->update([
            'points' => $pointRecord->points + $pointsEarned
        ]);

        Notification::make()
            ->title("Penjualan berhasil disimpan.")
            ->body("Pengguna mendapatkan {$pointsEarned} poin.")
            ->success()
            ->send();

        $this->form->fill([]);
        $this->isLoading = false;

        $this->redirect(route('filament.pages.sales-overview'));
    }

    protected function calculatePointsPerSale()
    {
        return 25;
    }
}
