<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'address',
        'email',
        'phone',
        'website',
        'smallDescription',
        'bigDescription',
        'image',
    ];

    // Relation avec les offres/produits (si chaque agence a plusieurs offres)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
