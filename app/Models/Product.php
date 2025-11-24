<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'caliber',
        'description',
        'price',
        'image_path',
        'is_available',
    ];
}
