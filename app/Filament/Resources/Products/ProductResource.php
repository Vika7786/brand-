<?php

namespace App\Filament\Resources\Products;

use App\Filament\Resources\Products\Pages\CreateProduct;
use App\Filament\Resources\Products\Pages\EditProduct;
use App\Filament\Resources\Products\Pages\ListProducts;
use App\Filament\Resources\Products\Schemas\ProductForm;
use App\Filament\Resources\Products\Tables\ProductsTable;
use App\Models\Product;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Product';

    
    public static function form(Schema $schema): Schema
    {
         return $schema->schema([
            TextInput::make('name')->label('Название страницы')->columnSpanFull()->required(),
            FileUpload::make('picture')->label('Фото')->directory('products'),
            RichEditor::make('discription')->label('Описание')->columnSpanFull(),
            TextInput::make('status')->label('Cтатус'),
            Select::make('lang')
            ->options([
        'ru' => 'ru',
        'en' => 'en',
        'fr' => 'fr',
        'de' => 'de',
        'pl' => 'pl',
    ]),
            Toggle::make('v_nalishii'),
        ]);
    }




    public static function table(Table $table): Table
    {
         return $table
        ->columns([
           TextColumn::make('name')->sortable()->label('Название страницы'),
           ImageColumn::make('picture')->label('Фото'),
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
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'edit' => EditProduct::route('/{record}/edit'),
        ];
    }
}
