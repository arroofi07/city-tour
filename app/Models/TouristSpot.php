<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristSpot extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'short_description',
        'image',
        'gallery',
        'location',
        'price',
        'rating',
        'category',
        'facilities',
        'contact',
        'opening_hours',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'gallery' => 'array',
        'facilities' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'rating' => 'decimal:1',
    ];
}
