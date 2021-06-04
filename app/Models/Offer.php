<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'price',
        'start_at',
        'ending_at',
    ];
}
