<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'features' => 'array',
        'itinerary' => 'array',
        'included' => 'array',
        'excluded' => 'array',
        'images' => 'array',
        'start_date' => 'date',
        'end_date' => 'date'
    ];
    
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }    
}  
