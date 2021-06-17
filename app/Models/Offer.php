<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Offer
 *
 * @property int $id
 * @property float $price
 * @property string $start_at
 * @property string|null $ending_at
 * @property-read mixed $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Serving[] $servings
 * @property-read int|null $servings_count
 * @method static \Database\Factories\OfferFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereEndingAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereStartAt($value)
 * @mixin \Eloquent
 */
class Offer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function getNameAttribute()
    {
        return $this->price . ' euro, ' . $this->start_at . ' - ' . $this->ending_at;
    }

    public function servings() {
        return $this->hasMany(Serving::class);
    }
}
