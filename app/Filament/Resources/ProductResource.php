<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\SpatieTagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-s-building-storefront';

    protected static ?string $navigationLabel = 'Products List';

    protected static ?string $navigationGroup = 'Products';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    Split::make([
                        Section::make([
                            TextInput::make('title')
                        ->required()
                        ->label('Title')
                        ->placeholder('Product title')
                        ->live(true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                        ->maxLength(255),
                    TextInput::make('slug')
                        ->required()
                        ->label('Slug')
                        ->placeholder('Product slug')
                        ->readOnly(),
                    RichEditor::make('excerpt')
                        ->required()
                        ->toolbarButtons([])
                        ->label('Excerpt')
                        ->placeholder('Product excerpt')
                        ->maxLength(65535),
                    RichEditor::make('description')
                        ->required()
                        ->toolbarButtons([
                            'bold',
                            'h2',
                            'h3',
                            'redo',
                            'strike',
                            'underline',
                            'undo',
                        ])
                        ->label('Description')
                        ->placeholder('Product description')
                        ->maxLength(65535),
                        SpatieTagsInput::make('tags')
                        ->label('Tags')
                        ->placeholder('Product tags')
                        ->type('tags')
                        ->required(),
                        ]),
                        Section::make([
                        SpatieMediaLibraryFileUpload::make('image')
                                ->required()
                                ->label('Thumbnail')
                                ->imageEditor()
                                ->collection('products')
                                ->image(),
                        SpatieMediaLibraryFileUpload::make('detailimages')
                                ->label('Detail Product Images')
                                ->collection('productimages')
                                ->image()
                                ->imageEditor()
                                ->required(),
                        SpatieMediaLibraryFileUpload::make('topimages')
                                ->label('Top Notes')
                                ->collection('topnotes')
                                ->multiple()
                                ->image()
                                ->maxFiles(3)
                                ->reorderable()
                                ->hint('Upload up to 3 images')
                                ->hintColor('warning')
                                ->hintIcon('heroicon-s-information-circle')
                                ->required()
                                ->imageEditor(),
                        SpatieMediaLibraryFileUpload::make('middleimages')
                                ->label('Middle Notes')
                                ->collection('middlenotes')
                                ->multiple()
                                ->image()
                                ->maxFiles(3)
                                ->reorderable()
                                ->hint('Upload up to 3 images')
                                ->hintColor('warning')
                                ->hintIcon('heroicon-s-information-circle')
                                ->required()
                                ->imageEditor(),
                        SpatieMediaLibraryFileUpload::make('baseimages')
                                ->label('Base Notes')
                                ->collection('basenotes')
                                ->multiple()
                                ->image()
                                ->maxFiles(3)
                                ->reorderable()
                                ->hint('Upload up to 3 images')
                                ->hintColor('warning')
                                ->hintIcon('heroicon-s-information-circle')
                                ->required()
                                ->imageEditor(),
                        SpatieMediaLibraryFileUpload::make('personalityimages')
                                ->label('Personality')
                                ->collection('personality')
                                ->multiple()
                                ->image()
                                ->maxFiles(4)
                                ->reorderable()
                                ->hint('Upload up to 4 images')
                                ->hintColor('warning')
                                ->hintIcon('heroicon-s-information-circle')
                                ->required()
                                ->imageEditor(),
                        Toggle::make('bestdeal')
                            ->label('Best Deal')
                            ->onColor('success')
                            ->offColor('danger')
                        ])
                    ])->from('md')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->alignCenter()
                    ->searchable(),
                SpatieMediaLibraryImageColumn::make('image')
                    ->collection('products')
                    ->label('Image')
                    ->alignCenter()
                    ->circular(),
                    SpatieTagsColumn::make('tags')
                    ->label('Tags')
                    ->type('tags')
                    ->alignCenter(),
                TextColumn::make('created_at')
                    ->alignCenter()
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->alignCenter()
                    ->dateTime(),
                ToggleColumn::make('bestdeal')
                    ->label('Best Deal')
                    ->onColor('success')
                    ->offColor('danger'),
            ])
            ->filters([
                Filter::make('created_at')
                ->form([
                    DatePicker::make('created_from'),
                    DatePicker::make('created_until'),
                ])
                ->indicateUsing(function (array $data): array{
                    $indicators = [];

                    if($data['created_from'] && $data['created_until']) {
                        $indicators[] = 'Created between' . $data['created_from'] . ' and ' . $data['created_until'];
                    }

                    return $indicators;
                })
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                    ->when(
                        $data['created_from'],
                        fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                    )
                    ->when(
                        $data['created_until'],
                        fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                    );
                })
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
