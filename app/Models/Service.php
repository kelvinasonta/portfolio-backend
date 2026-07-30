<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'tagline',
        'short_desc',
        'long_desc',
        'icon',
        'includes',
        'tech',
        'gradient',
        'slug',
        'pricing',
        'faq',
        'cover_image',
        'order',
        'is_active',
    ];

    protected $casts = [
        'includes' => 'array',
        'tech' => 'array',
        'pricing' => 'array',
        'faq' => 'array',
        'is_active' => 'boolean',
    ];
}
