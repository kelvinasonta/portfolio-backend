<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_post_id',
        'author_name',
        'content',
    ];

    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }
}
