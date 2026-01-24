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
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class RegistrationContentResource extends Resource
{
    protected static ?string $model = RegistrationContent::class;

    protected static ?string $navigationLabel = 'Pendaftaran';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getNavigationGroup(): ?string
    {
        return 'Pendaftaran';
    }

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-clipboard';
    }
    /* ================= FORM (Filament v4) ================= */
    public static function form(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('key')
                ->label('Key')
                ->required()
                ->unique(ignoreRecord: true)
                ->helperText('Contoh: persyaratan, biaya, jadwal'),

            TextInput::make('title')
                ->required(),

            FileUpload::make('image')
                ->label('Gambar (Opsional)')
                ->image()
                ->disk('public')
                ->directory('registration')
                ->visibility('public')
                ->imageEditor()
                ->columnSpanFull(),

            RichEditor::make('content')
                ->label('Konten (Opsional)')
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
                ->helperText('Boleh dikosongkan jika hanya menggunakan gambar.'),

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
