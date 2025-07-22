<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopulationData extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'value',
        'unit',
        'description',
        'year'
    ];

    protected $casts = [
        'value' => 'integer',
        'year' => 'integer'
    ];
}
