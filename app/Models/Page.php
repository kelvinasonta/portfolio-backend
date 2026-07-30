<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'content'];

    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }

    public function sections()
    {
        return $this->hasMany(PageSection::class)->orderBy('order');
    }
}
