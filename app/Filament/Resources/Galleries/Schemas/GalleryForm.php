<?php

namespace App\Filament\Resources\Galleries\Schemas;

use App\Models\GalleryCategory;
use App\Models\Post;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([

            TextInput::make('title')
                ->label('Judul Kegiatan')
                ->required()
                ->maxLength(255),

            Select::make('gallery_category_id')
                ->label('Kategori Galeri')
                ->relationship('category', 'name')
                ->searchable()
                ->preload()
                ->required(),

            Select::make('post_id')
                ->label('Terkait Berita (Opsional)')
                ->relationship('post', 'title')
                ->searchable()
                ->nullable(),

            DatePicker::make('event_date')
                ->label('Tanggal Kegiatan')
                ->required(),

            Textarea::make('description')
                ->label('Deskripsi Singkat')
                ->rows(4)
                ->nullable(),

            FileUpload::make('images')
                ->label('Foto Dokumentasi')
                ->multiple()
                ->image()
                ->disk('public')
                ->maxFiles(10)
                ->directory('galleries')
                ->reorderable()
                ->required()
                ->helperText('Maksimal 10 foto. Foto pertama akan menjadi cover.'),

        ]);
    }
}
