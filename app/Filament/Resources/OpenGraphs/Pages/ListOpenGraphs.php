<?php

namespace App\Filament\Resources\OpenGraphs\Pages;

use App\Filament\Resources\OpenGraphs\OpenGraphResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOpenGraphs extends ListRecords
{
    protected static string $resource = OpenGraphResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
