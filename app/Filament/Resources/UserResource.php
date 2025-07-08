<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\RelationManagers\BelongsToManyRelationManager;
use Filament\Resources\RelationManagers\HasOneRelationManager;
use Filament\Resources\RelationManagers\MorphManyRelationManager;
use Filament\Resources\RelationManagers\MorphToManyRelationManager;
use Filament\Resources\RelationManagers\MorphOneRelationManager;
use App\Models\PointHistory;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';

    protected static ?string $navigationGroup = 'User Manajemen';

    protected static ?string $navigationLabel = 'Data User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('password')
                        ->password()
                        ->maxLength(255)
                        ->dehydrateStateUsing(fn($state) => bcrypt($state))
                        ->dehydrated(fn($state) => filled($state))
                        ->required(fn(Page $livewire): bool => $livewire instanceof CreateRecord)
                        ->minLength(8),
                    Select::make('roles')
                        ->multiple()
                        ->relationship('roles', 'name')
                        ->preload()
                        ->label('Role'),
                    Select::make('sponsor_id')
                        ->label('Sponsor/Upline')
                        ->options(fn() => \App\Models\User::pluck('name', 'id')->toArray())
                        ->searchable()
                        ->preload()
                        ->nullable()
                        ->helperText('Pilih sponsor/upline (opsional)')
                        ->rule(function ($get, $record) {
                            $userId = $record?->id;
                            return function ($attribute, $value, $fail) use ($userId) {
                                if ($userId && $value && $userId == $value) {
                                    $fail('Sponsor tidak boleh diri sendiri.');
                                }
                            };
                        }),
                ]),
                Card::make([
                    SpatieMediaLibraryFileUpload::make('avatar')
                        ->collection('avatars')
                        ->label('Poto Profile')
                        ->maxFiles(1)
                        // ->required()
                        ->image(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('roles.name')
                    ->badge()
                    ->sortable(),
                SpatieMediaLibraryImageColumn::make('avatar')
                    ->collection('avatars')
                    ->circular(),
                TextColumn::make('total_points')
                    ->label('Total Poin')
                    ->getStateUsing(fn($record) => $record->total_points)
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUsers::route('/'),
            'tree-network' => Pages\UserTreeNetwork::route('/{record}/tree-network'),
        ];
    }

    public static function getRelations(): array
    {
        return [
            PointHistoriesRelationManager::class,
            DownlinesRelationManager::class,
        ];
    }
}

class PointHistoriesRelationManager extends RelationManager
{
    protected static string $relationship = 'pointHistories';
    protected static ?string $title = 'Riwayat Poin';

    public function form(Form $form): Form
    {
        return $form->schema([]); // Tidak perlu form create/edit
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')->label('Tanggal')->dateTime('d-m-Y H:i'),
                TextColumn::make('amount')->label('Jumlah Poin'),
                TextColumn::make('type')->label('Tipe'),
                TextColumn::make('description')->label('Keterangan'),
            ])
            ->filters([])
            ->headerActions([])
            ->actions([])
            ->bulkActions([]);
    }
}

class DownlinesRelationManager extends RelationManager
{
    protected static string $relationship = 'downlines';
    protected static ?string $title = 'Jaringan Downline';

    public function form(Form $form): Form
    {
        return $form->schema([]); // Tidak perlu form create/edit
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('created_at')->label('Tanggal Gabung')->dateTime('d-m-Y'),
                TextColumn::make('total_points')->label('Total Poin'),
            ])
            ->filters([])
            ->headerActions([])
            ->actions([])
            ->bulkActions([]);
    }
}

class UserTreeNetworkPage extends Page
{
    protected static string $view = 'filament.pages.user-tree-network';
    public $record;
    public $tree;

    public function mount($record): void
    {
        $this->record = \App\Models\User::findOrFail($record);
        $this->tree = $this->record->downlineTree();
    }

    public function getTitle(): string
    {
        return 'Tree Jaringan: ' . $this->record->name;
    }
}
