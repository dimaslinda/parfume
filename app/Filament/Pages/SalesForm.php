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
use App\Models\PointHistory;

class SalesForm extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $quantity;
    public $user_id;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationGroup = 'Penjualan';
    protected static string $view = 'filament.pages.sales-form';
    protected static ?string $navigationLabel = 'Form Total Penjualan';

    /**
     * Mount page dan set user_id jika ada.
     *
     * @param int|null $user
     * @return void
     */
    public function mount($user = null): void
    {
        $this->user_id = $user;
    }
    public bool $isLoading = false;

    /**
     * Judul halaman form penjualan.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return 'Form Rekap Total Penjualan perhari';
    }

    /**
     * Skema form input penjualan.
     *
     * @return array
     */
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

    /**
     * Proses submit form penjualan dan pencatatan poin.
     *
     * @return void
     */
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

        $pointsPerSale = $this->calculatePointsPerSale();
        $pointsEarned = $quantity * $pointsPerSale;

        Sales::create([
            'user_id'       => $user->id,
            'quantity'      => $quantity,
            'points_earned' => $pointsEarned,
        ]);

        // Catat ke point_histories untuk user (personal_sale)
        PointHistory::create([
            'user_id' => $user->id,
            'source_user_id' => null,
            'amount' => $pointsEarned,
            'type' => 'personal_sale',
            'description' => 'Poin dari penjualan sendiri',
        ]);

        // Jika ada sponsor/upline, berikan 10% poin ke sponsor (downline_sale)
        if ($user->sponsor_id) {
            $uplinePoints = (int) round($pointsEarned * 0.1);
            if ($uplinePoints > 0) {
                PointHistory::create([
                    'user_id' => $user->sponsor_id,
                    'source_user_id' => $user->id,
                    'amount' => $uplinePoints,
                    'type' => 'downline_sale',
                    'description' => 'Poin dari penjualan downline: ' . $user->name,
                ]);

                // Cek sponsor level 2 (upline dari sponsor)
                $sponsor1 = User::find($user->sponsor_id);
                if ($sponsor1 && $sponsor1->sponsor_id) {
                    $upline2Points = (int) round($uplinePoints * 0.1);
                    if ($upline2Points > 0) {
                        PointHistory::create([
                            'user_id' => $sponsor1->sponsor_id,
                            'source_user_id' => $sponsor1->id,
                            'amount' => $upline2Points,
                            'type' => 'downline_sale',
                            'description' => 'Poin dari penjualan downline level 2: ' . $sponsor1->name,
                        ]);
                    }
                }
            }
        }

        Notification::make()
            ->title("Penjualan berhasil disimpan.")
            ->body("Pengguna mendapatkan {$pointsEarned} poin.")
            ->success()
            ->send();

        $this->form->fill([]);
        $this->isLoading = false;

        $this->redirect(route('filament.pages.sales-overview'));
    }

    /**
     * Hitung jumlah poin per penjualan.
     *
     * @return int
     */
    protected function calculatePointsPerSale()
    {
        return 25;
    }
}
