<?php

namespace App\Filament\Resources\OpenGraphs;

use App\Filament\Resources\OpenGraphs\Pages\CreateOpenGraph;
use App\Filament\Resources\OpenGraphs\Pages\EditOpenGraph;
use App\Filament\Resources\OpenGraphs\Pages\ListOpenGraphs;
use App\Filament\Resources\OpenGraphs\Schemas\OpenGraphForm;
use App\Filament\Resources\OpenGraphs\Tables\OpenGraphsTable;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Models\OpenGraph;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OpenGraphResource extends Resource
{
    protected static ?string $model = OpenGraph::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
           TextInput::make('url'),
           TextInput::make('og_title'),
           TextInput::make('og_type'),
           TextInput::make('og_url'),
           TextInput::make('og_image'),
           TextInput::make('og_description'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns ([
            TextColumn::make('url')->sortable(),
            TextColumn::make('og_title')->sortable(),
            TextColumn::make('og_type')->sortable(),
            TextColumn::make('og_url')->sortable(),
            TextColumn::make('og_image')->sortable(),
            TextColumn::make('og_description')->sortable(),
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
            'index' => ListOpenGraphs::route('/'),
            'create' => CreateOpenGraph::route('/create'),
            'edit' => EditOpenGraph::route('/{record}/edit'),
        ];
    }
}
