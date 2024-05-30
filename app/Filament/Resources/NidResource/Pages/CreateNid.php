<?php

namespace App\Filament\Resources\NidResource\Pages;

use App\Filament\Resources\NidResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNid extends CreateRecord
{
    protected static string $resource = NidResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
