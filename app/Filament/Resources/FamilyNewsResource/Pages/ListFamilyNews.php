<?php

namespace App\Filament\Resources\FamilyNewsResource\Pages;

use App\Filament\Resources\FamilyNewsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFamilyNews extends ListRecords
{
    protected static string $resource = FamilyNewsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
