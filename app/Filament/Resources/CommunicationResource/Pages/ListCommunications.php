<?php

namespace App\Filament\Resources\CommunicationResource\Pages;

use App\Filament\Resources\CommunicationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommunications extends ListRecords
{
    protected static string $resource = CommunicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
