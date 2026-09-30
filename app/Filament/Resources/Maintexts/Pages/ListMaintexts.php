<?php

namespace App\Filament\Resources\Maintexts\Pages;

use App\Filament\Resources\Maintexts\MaintextResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMaintexts extends ListRecords
{
    protected static string $resource = MaintextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
