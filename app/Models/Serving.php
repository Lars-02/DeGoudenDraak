<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serving extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'number',
        'version',
        'name',
        'discription',
        'price',
        'spice'
    ];
}
