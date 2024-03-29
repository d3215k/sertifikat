<?php

namespace App\Filament\Resources\GrupResource\Pages;

use App\Filament\Resources\GrupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGrup extends EditRecord
{
    protected static string $resource = GrupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
