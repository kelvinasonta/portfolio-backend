<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'slug', 'title', 'excerpt', 'content', 'category', 'author', 
        'read_time', 'published_at', 'featured', 'cover_url', 'gradient'
    ];

    protected $appends = ['published_at_formatted'];

    protected function casts(): array
    {
        return [
            'featured' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function getPublishedAtFormattedAttribute()
    {
        return $this->published_at ? $this->published_at->format('M j, Y') : null;
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class)->orderBy('created_at', 'desc');
    }
}
