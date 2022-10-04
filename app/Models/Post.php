<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'slug', 'published', 'published_at'
    ];

    protected $casts = [
        'published_at' => 'date',
        'published' => 'boolean',
    ];
}
