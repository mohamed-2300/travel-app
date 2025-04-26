<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'type', 'duration', 'price', 'departure', 'agency_id',
        'description', 'features', 'itinerary', 'start_date', 'end_date',
        'whatsapp_number', 'included', 'excluded', 'images'
    ];

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