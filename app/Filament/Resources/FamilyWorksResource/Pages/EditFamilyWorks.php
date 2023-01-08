<?php

namespace App\Filament\Resources\FamilyWorksResource\Pages;

use App\Filament\Resources\FamilyWorksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFamilyWorks extends EditRecord
{
    protected static string $resource = FamilyWorksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
