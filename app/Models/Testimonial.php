<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'quote', 'author', 'role', 'company', 'avatar_url', 'featured'
    ];

    protected function casts(): array
    {
        return [
            'featured' => 'boolean',
        ];
    }
}
