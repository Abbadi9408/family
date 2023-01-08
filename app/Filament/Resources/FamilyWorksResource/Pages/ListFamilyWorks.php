<?php

namespace App\Filament\Resources\FamilyWorksResource\Pages;

use App\Filament\Resources\FamilyWorksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFamilyWorks extends ListRecords
{
    protected static string $resource = FamilyWorksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
