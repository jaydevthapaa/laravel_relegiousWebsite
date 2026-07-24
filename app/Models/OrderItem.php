<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    function order()
    {
        return $this->belongsTo(Order::class);
    }

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}
