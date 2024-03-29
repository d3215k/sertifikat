<?php

namespace App\Filament\Resources\GrupResource\Pages;

use App\Filament\Resources\GrupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGrups extends ListRecords
{
    protected static string $resource = GrupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
