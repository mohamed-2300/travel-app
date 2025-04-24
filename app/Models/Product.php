<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'images' => 'array',
        'features' => 'array',
        'itinerary' => 'array',
        'included' => 'array',
        'excluded' => 'array',
    ];
    
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }    
}  
