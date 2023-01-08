<?php

namespace App\Filament\Resources\FamilyNewsResource\Pages;

use App\Filament\Resources\FamilyNewsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFamilyNews extends EditRecord
{
    protected static string $resource = FamilyNewsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
