<?php

namespace App\Filament\Resources\Maintexts;

use App\Filament\Resources\Maintexts\Pages\CreateMaintext;
use App\Filament\Resources\Maintexts\Pages\EditMaintext;
use App\Filament\Resources\Maintexts\Pages\ListMaintexts;
use App\Filament\Resources\Maintexts\Schemas\MaintextForm;
use App\Filament\Resources\Maintexts\Tables\MaintextsTable;
use App\Models\Maintext;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MaintextResource extends Resource
{
    protected static ?string $model = Maintext::class;

    protected static ?string $pluralModelLabel = "Страницы";
    

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Maintext';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('name')->label('Название страницы')->columnSpanFull()->required(),
            Textarea::make('discription_small')->label('Короткое описание')->columnSpanFull(),
            RichEditor::make('body')->label('Текст страницы')->columnSpanFull(),
            TextInput::make('url')->label('Адрес страницы')->required(),
            FileUpload::make('picture')->label('Фото')->directory('contents')
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('id')->sortable()->label('ID'),
            ImageColumn::make('picture')->label('Фото'),
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
            'index' => ListMaintexts::route('/'),
            'create' => CreateMaintext::route('/create'),
            'edit' => EditMaintext::route('/{record}/edit'),
        ];
    }
}
