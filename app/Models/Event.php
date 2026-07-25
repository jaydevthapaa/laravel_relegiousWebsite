<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'image',
        'location',
        'event_date',
        'start_time',
        'end_time',
        'status'
    ];
}
