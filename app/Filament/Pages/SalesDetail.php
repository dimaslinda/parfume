<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Tables;
use App\Models\Sales;
use Filament\Pages\Page;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Filament\Notifications\Notification;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;

class SalesDetail extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-eye';

    protected static string $view = 'filament.pages.sales-detail';

    protected static ?string $navigationLabel = 'Detail Penjualan';

    public User $user;
    public $sales;

    public function mount($user)
    {
        $this->sales = Sales::where('user_id', $user->id)->get();
    }

    public function getTitle(): string
    {
        return 'Detail Penjualan ' . $this->user->name;
    }

    protected function getTableQuery(): Builder
    {
        return Sales::query()->where('user_id', $this->user->id);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->alignCenter()
                ->label('ID'),
            TextColumn::make('user.name')
                ->alignCenter()
                ->label('Pengguna'),
            TextColumn::make('quantity')
                ->alignCenter()
                ->label('Jumlah Penjualan')
                ->sortable(),
            TextColumn::make('points_earned')
                ->alignCenter()
                ->label('Poin Diperoleh')
                ->sortable(),
            TextColumn::make('created_at')
                ->alignCenter()
                ->label('Tanggal')
                ->dateTime('d M Y')
                ->sortable(),
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            Filter::make('tanggal')
                ->form([
                    DatePicker::make('from')
                        ->label('Dari Tanggal')
                        ->placeholder('Pilih tanggal awal'),
                    DatePicker::make('until')
                        ->label('Sampai Tanggal')
                        ->placeholder('Pilih tanggal akhir'),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when($data['from'], fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date))
                        ->when($data['until'], fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date));
                }),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('delete')
            ->label('Delete')
            ->requiresConfirmation() // Tampilkan modal konfirmasi sebelum aksi dijalankan.
            ->modalHeading('Konfirmasi Hapus')
            ->modalSubheading('Apakah Anda yakin ingin menghapus data penjualan ini? Poin pengguna dan total penjualan akan berkurang sesuai dengan data yang dihapus.')
            ->modalButton('Hapus')
            ->action(function (Sales $record) {
                try {
                    DB::transaction(function () use ($record) {
                        // Ambil data user terkait (pastikan relasi Sales->user telah didefinisikan)
                        $user = $record->user ?? User::find($record->user_id);

                        if ($user) {
                            // Update tabel points: kurangi nilai points berdasarkan points_earned
                            DB::table('points')
                                ->where('user_id', $user->id)
                                ->decrement('points', $record->points_earned);
                        }

                        // Hapus data penjualan
                        $record->delete();
                    });

                    Notification::make()
                        ->title('Berhasil menghapus data penjualan '.  $record->user->name  . ' dengan ID ' . $record->id . ' dan mengurangi poin pengguna sebesar ' . $record->points_earned . ' poin.')
                        ->success()
                        ->send();
                } catch (\Exception $exception) {
                    Notification::make()
                        ->title('Gagal menghapus data penjualan')
                        ->danger()
                        ->body($exception->getMessage())
                        ->send();
                }
            })
            ->color('danger')
            ->icon('heroicon-o-trash'),

        ];
    }

}
