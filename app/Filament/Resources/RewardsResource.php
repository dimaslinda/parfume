<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RewardsResource\Pages;
use App\Filament\Resources\RewardsResource\RelationManagers;
use App\Models\Rewards;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RewardsResource extends Resource
{
    protected static ?string $model = Rewards::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';

    protected static ?string $navigationGroup = 'Penjualan';

    protected static ?string $navigationLabel = 'Data Reward Yang Tersedia';

    /**
     * Skema form untuk create/edit reward.
     *
     * @param Form $form
     * @return Form
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    TextInput::make('name')
                        ->required()
                        ->validationAttribute('Harus diisi')
                        ->label('Nama Reward')
                        ->placeholder('Reward name')
                        ->maxLength(255),
                    RichEditor::make('description')
                        ->required()
                        ->toolbarButtons([])
                        ->label('Deskripsi Reward')
                        ->placeholder('Description')
                        ->maxLength(65535),
                    TextInput::make('point_cost')
                        ->required()
                        ->validationAttribute('Harus diisi')
                        ->numeric()
                        ->minValue(1)
                        ->label('Poin')
                        ->placeholder('Poin'),
                ]),
                Card::make([
                    SpatieMediaLibraryFileUpload::make('reward_image')
                        ->collection('rewards')
                        ->required()
                        ->label('Gambar Reward')
                        ->image(),
                ])
            ]);
    }

    /**
     * Skema tabel untuk daftar reward.
     *
     * @param Table $table
     * @return Table
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('reward_image')
                    ->collection('rewards')
                    ->label('Gambar Reward')
                    ->alignCenter(),
                TextColumn::make('name')
                    ->label('Nama Reward')
                    ->alignCenter()
                    ->searchable(),
                TextColumn::make('point_cost')
                    ->label('Poin')
                    ->alignCenter()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    /**
     * Daftar halaman (pages) yang tersedia untuk resource ini.
     *
     * @return array
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRewards::route('/'),
        ];
    }
}
