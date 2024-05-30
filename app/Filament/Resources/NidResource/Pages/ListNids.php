<?php

namespace App\Filament\Resources\NidResource\Pages;

use App\Filament\Resources\NidResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNids extends ListRecords
{
    protected static string $resource = NidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
