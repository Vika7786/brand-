<?php

namespace App\Filament\Resources\Maintexts\Pages;

use App\Filament\Resources\Maintexts\MaintextResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMaintext extends EditRecord
{
    protected static string $resource = MaintextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
