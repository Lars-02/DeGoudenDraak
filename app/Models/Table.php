<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Table
 *
 * @property int $id
 * @property int $seats
 * @method static \Illuminate\Database\Eloquent\Builder|Table newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Table newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Table query()
 * @method static \Illuminate\Database\Eloquent\Builder|Table whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Table whereSeats($value)
 * @mixin \Eloquent
 */
class Table extends Model
{
    use HasFactory;

    public $timestamps = false;
}
