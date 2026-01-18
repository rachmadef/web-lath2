<?php

namespace App\Filament\Resources\Galleries\Tables;

use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\Action;

class GalleriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->contentGrid([
                'md' => 3,
                'xl' => 4,
            ])
            ->columns([
                Stack::make([
                    ImageColumn::make('images')
                        ->limit(1)
                        ->height(220)
                        ->extraImgAttributes([
                            'class' => 'object-cover w-full h-full',
                        ])
                        ->extraAttributes([
                            'class' => 'aspect-[4/3] overflow-hidden rounded-xl',
                        ]),

                    TextColumn::make('title')
                        ->weight('bold')
                        ->size('lg')
                        ->extraAttributes([
                            'class' => 'text-center mt-3',
                        ]),
                ])
                    ->extraAttributes([
                        'class' => 'flex flex-col h-full justify-between',
                    ]),
            ])


            ->actions([
                Action::make('edit')
                    ->icon('heroicon-o-pencil')
                    ->url(fn($record) => route(
                        'filament.dashboard.resources.galleries.edit',
                        $record
                    )),

                Action::make('delete')
                    ->icon('heroicon-o-trash')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->action(fn($record) => $record->delete()),
            ])
            ->paginated([12]);
    }
}
