<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class PostChart extends ChartWidget
{
    protected static ?int $sort = 2;

    protected ?string $heading = 'Statistik Berita Mingguan';

    protected ?string $description = 'Jumlah berita yang dipublish per hari';

    protected function getData(): array
    {
        // Ambil data post 7 hari terakhir (berdasarkan tanggal publish)
        $posts = Post::whereNotNull('published_at')
            ->where('published_at', '>=', now()->subDays(6))
            ->get()
            ->groupBy(fn($post) => $post->published_at->format('Y-m-d'));

        // Label 7 hari (tanggal)
        $labels = collect(range(0, 6))
            ->map(fn($i) => now()->subDays(6 - $i)->format('d M'));

        // Hitung jumlah post per hari
        $data = $labels->map(function ($label) use ($posts) {
            $date = Carbon::createFromFormat('d M', $label)->format('Y-m-d');
            return $posts->get($date)?->count() ?? 0;
        });

        return [
            'datasets' => [
                [
                    'label' => 'Berita',
                    'data' => $data->values(),
                    'backgroundColor' => '#f97316', // orange
                    'borderColor' => '#ea580c',
                ],
            ],
            'labels' => $labels->values(),
        ];
    }

    protected function getType(): string
    {
        return 'line'; // bar | line | pie
    }
}
