<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_type',   // add, modify, delete
        'entity_type',     // agency, product
        'entity_name',     // the name/title
    ];
}
