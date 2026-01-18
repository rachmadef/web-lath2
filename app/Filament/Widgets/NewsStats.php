<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class NewsStats extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Berita', Post::count()),
            Stat::make('Published', Post::where('status', 'published')->count())
                ->color('success'),
            Stat::make('Draft', Post::where('status', 'draft')->count())
                ->color('warning'),
            Stat::make('Kategori', Category::count()),
            Stat::make('Penulis', User::count()),
        ];
    }
}
