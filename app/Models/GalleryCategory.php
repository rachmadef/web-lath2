<?php

namespace App\Models;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GalleryCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}
