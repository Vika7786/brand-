<?php

namespace App\Filament\Resources\Catalogs;

use App\Filament\Resources\Catalogs\Pages\CreateCatalog;
use App\Filament\Resources\Catalogs\Pages\EditCatalog;
use App\Filament\Resources\Catalogs\Pages\ListCatalogs;
use App\Filament\Resources\Catalogs\Schemas\CatalogForm;
use App\Filament\Resources\Catalogs\Tables\CatalogsTable;
use App\Models\Catalog;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CatalogResource extends Resource
{
    protected static ?string $model = Catalog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Catalog';

    
    
    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('name')->label('Название страницы')->columnSpanFull()->required(),
            TextInput::make('url')->label('Адрес страницы')->required()
        ]);
    }



    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('id')->sortable()->label('ID'),
            TextColumn::make('name')->sortable()->label('Название страницы')->searchable(),
            TextColumn::make('url')->sortable()->label('URL страницы')
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
            'index' => ListCatalogs::route('/'),
            'create' => CreateCatalog::route('/create'),
            'edit' => EditCatalog::route('/{record}/edit'),
        ];
    }
}
