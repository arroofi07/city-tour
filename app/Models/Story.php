<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image_path',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    public function getExcerptAttribute()
    {
        return \Illuminate\Support\Str::limit($this->description, 150, '...');
    }

    public function getReadTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->description));
        $readTime = ceil($wordCount / 200); // Average reading speed 200 words per minute

        return max(1, $readTime);
    }
}
