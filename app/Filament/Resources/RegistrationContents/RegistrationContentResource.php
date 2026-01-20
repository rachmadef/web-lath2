<?php

namespace App\Filament\Resources\RegistrationContents;

use App\Filament\Resources\RegistrationContents\Pages\CreateRegistrationContent;
use App\Filament\Resources\RegistrationContents\Pages\EditRegistrationContent;
use App\Filament\Resources\RegistrationContents\Pages\ListRegistrationContents;
use App\Models\RegistrationContent;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class RegistrationContentResource extends Resource
{
    protected static ?string $model = RegistrationContent::class;

    protected static ?string $navigationLabel = 'Konten Pendaftaran';

    protected static BackedEnum|string|null $navigationIcon =
        Heroicon::OutlinedDocumentText;

    /* ================= FORM (Filament v4) ================= */
    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('key')
                ->required()
                ->disabled(),

            TextInput::make('title')
                ->required(),

            RichEditor::make('content')
                ->label('Konten')
                ->required()
                ->columnSpanFull()
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'strike',
                    'orderedList',
                    'bulletList',
                    'link',
                    'undo',
                    'redo',
                ])
                ->helperText('Gunakan tombol daftar (numbered/bulleted list) untuk membuat poin atau penomoran.'),

        ]);
    }

    /* ================= TABLE (Filament v4) ================= */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')->badge(),
                TextColumn::make('title')->searchable(),
            ]);
        // ❌ TIDAK PERLU actions()
    }

    /* ================= ROUTES ================= */
    public static function getPages(): array
    {
        return [
            'index'  => ListRegistrationContents::route('/'),
            'create' => CreateRegistrationContent::route('/create'),
            'edit'   => EditRegistrationContent::route('/{record}/edit'),
        ];
    }
}
