<?php

namespace App\Filament\Resources\GalleryCategories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use App\Models\GalleryCategory;

class GalleryCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                    SelectFilter::make('gallery_category_id')
                        ->label('Kategori')
                        ->options(
                            GalleryCategory::pluck('name', 'id')->toArray()
                        ),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
