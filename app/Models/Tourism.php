<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourism extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'location',
        'latitude',
        'longitude',
        'image',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8'
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
