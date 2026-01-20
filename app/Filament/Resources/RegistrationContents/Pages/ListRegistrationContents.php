<?php

namespace App\Filament\Resources\RegistrationContents\Pages;

use App\Filament\Resources\RegistrationContents\RegistrationContentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRegistrationContents extends ListRecords
{
    protected static string $resource = RegistrationContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
