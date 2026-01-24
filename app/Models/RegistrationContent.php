<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationContent extends Model
{
    protected $fillable = [
        'key',
        'title',
        'content',
        'image',
    ];
}
