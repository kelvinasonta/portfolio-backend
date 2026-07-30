<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'slug', 'name', 'category', 'description', 'tech', 
        'featured', 'cover_url', 'gradient', 'case_study_url', 'year'
    ];

    protected function casts(): array
    {
        return [
            'tech' => 'array',
            'featured' => 'boolean',
            'year' => 'integer',
        ];
    }
}
