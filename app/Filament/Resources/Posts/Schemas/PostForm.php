<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\{
    TextInput,
    Select,
    Textarea,
    FileUpload,
    RichEditor
};
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Kategori')
                    ->required(),

                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                Textarea::make('excerpt')
                    ->label('Ringkasan')
                    ->rows(3),

                RichEditor::make('content')
                    ->label('Isi Berita')
                    ->required(),

                FileUpload::make('thumbnail')
                    ->image()
                    ->disk('public')
                    ->directory('public/posts')
                    ->visibility('public')
                    ->required()
                    ->imageEditor(),

                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Publish',
                    ])
                    ->required(),
            ]);
    }
}
