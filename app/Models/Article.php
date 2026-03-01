<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'thumbnail_path', 'status', 'author_id'];

    protected $casts = [
        'status' => 'string',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
