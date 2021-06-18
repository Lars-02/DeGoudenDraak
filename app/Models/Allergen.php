<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Allergen
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Allergen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Allergen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Allergen query()
 * @method static \Illuminate\Database\Eloquent\Builder|Allergen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allergen whereName($value)
 * @mixin \Eloquent
 */
class Allergen extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;
}
