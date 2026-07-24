<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    //

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'stock',
        'status',
        'category_id'
    ];

    function category()
    {
        return $this->belongsTo(Category::class);
    }
}
