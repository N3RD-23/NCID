<?php

namespace App\Filament\Resources\NidResource\Pages;

use App\Filament\Resources\NidResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNid extends EditRecord
{
    protected static string $resource = NidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
