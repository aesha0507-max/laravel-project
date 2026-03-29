<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'price',
        'original_price',
        'rating',
        'reviews',
        'image',
        'category',
        'description',
        'features',
        'in_stock',
        'badge'
    ];
    
    protected $casts = [
        'features' => 'array',
        'in_stock' => 'boolean',
        'price' => 'decimal:2',
        'original_price' => 'decimal:2',
        'rating' => 'decimal:1',
    ];
}
