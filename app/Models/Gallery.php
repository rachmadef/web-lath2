<?php

namespace App\Models;
use App\Models\GalleryCategory;
use App\Models\Post;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'description',
        'images',
        'gallery_category_id',
        'post_id',
        'event_date',
    ];

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

    /**
     * Relasi ke berita
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
