<?php

namespace App\Filament\Resources\CommunicationResource\Pages;

use App\Filament\Resources\CommunicationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommunication extends EditRecord
{
    protected static string $resource = CommunicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
