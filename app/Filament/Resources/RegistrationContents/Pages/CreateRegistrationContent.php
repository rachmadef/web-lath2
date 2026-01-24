<?php

namespace App\Filament\Resources\RegistrationContents\Pages;

use App\Filament\Resources\RegistrationContents\RegistrationContentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRegistrationContent extends CreateRecord
{
    protected static string $resource = RegistrationContentResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['content']) && empty($data['image'])) {
            throw \Filament\Support\Exceptions\Halt::make()
                ->withNotification(
                    \Filament\Notifications\Notification::make()
                        ->danger()
                        ->title('Konten tidak valid')
                        ->body('Minimal isi teks atau upload gambar.')
                );
        }

        return $data;
    }

}
