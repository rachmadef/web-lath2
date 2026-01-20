<?php

namespace App\Filament\Resources\RegistrationContents\Pages;

use App\Filament\Resources\RegistrationContents\RegistrationContentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRegistrationContent extends EditRecord
{
    protected static string $resource = RegistrationContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
