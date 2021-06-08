<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serving extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function offer() {
        return $this->belongsTo(Offer::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function allergens() {
        return $this->belongsToMany(Allergen::class);
    }

    public function getFullNameAttribute()
    {
        return $this->number . $this->version . ' ' . $this->name;
    }
}
