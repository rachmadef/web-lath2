<?php

namespace App\Filament\Resources\Galleries\Tables;

use Filament\Tables;
use Filament\Tables\Table;

class GalleriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('images.0')
                    ->label('Cover')
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori')
                    ->sortable(),

                Tables\Columns\TextColumn::make('event_date')
                    ->label('Tanggal')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('post.title')
                    ->label('Berita')
                    ->limit(30)
                    ->toggleable(),
            ])
            ->defaultSort('event_date', 'desc');
    }
}
