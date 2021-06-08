<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function getNameAttribute()
    {
        return $this->price . ' euro, ' . $this->start_at . ' - ' . $this->ending_at;
    }
}
