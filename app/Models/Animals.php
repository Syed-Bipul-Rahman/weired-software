<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'name',
        'history',
        'description',
        'image_url',
    ];
}
