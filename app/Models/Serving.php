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
        'description',
        'price',
        'spice',
        'category_id',
        'offer_id'
    ];

    public function offers() {
        return $this->hasMany(Offer::class, 'offer_id');
    }

    public function categories() {
        return $this->hasMany(Category::class, 'category_id');
    }
}
