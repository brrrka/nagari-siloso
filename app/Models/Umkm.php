<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
        'category',
        'description',
        'address',
        'phone',
        'image',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean'
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
