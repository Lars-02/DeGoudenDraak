<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function roles() {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
}
