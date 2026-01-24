<?php

namespace App\Models;
use App\Models\GalleryCategory;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'images',
        'gallery_category_id',
        'post_id',
        'event_date',
    ];
    protected static function booted()
    {
        static::creating(function ($gallery) {
            $gallery->slug = static::generateUniqueSlug($gallery->title);
        });

        static::updating(function ($gallery) {
            if ($gallery->isDirty('title')) {
                $gallery->slug = static::generateUniqueSlug(
                    $gallery->title,
                    $gallery->id
                );
            }
        });
    }

    protected static function generateUniqueSlug(string $title, $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (
            static::where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter++;
        }

        return $slug;
    }

    protected $casts = [
        'images' => 'array',
        'event_date' => 'date',
    ];

    /**
     * Relasi ke kategori galeri
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(GalleryCategory::class, 'gallery_category_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Relasi ke berita
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
