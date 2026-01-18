<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('title')
                ->label('Judul Galeri')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('description')
                ->label('Deskripsi')
                ->rows(3),

            Forms\Components\FileUpload::make('images')
                ->label('Foto Galeri')
                ->multiple()
                ->image()
                ->disk('public')
                ->directory('public/galleries')
                ->visibility('public')
                ->required()
                ->reorderable()
                ->required(),
        ]);
    }
}
