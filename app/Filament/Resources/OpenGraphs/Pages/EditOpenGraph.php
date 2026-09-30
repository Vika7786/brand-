<?php

namespace App\Filament\Resources\OpenGraphs\Pages;

use App\Filament\Resources\OpenGraphs\OpenGraphResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOpenGraph extends EditRecord
{
    protected static string $resource = OpenGraphResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
