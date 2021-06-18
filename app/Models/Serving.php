<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Serving
 *
 * @property int $id
 * @property int $number
 * @property string|null $version
 * @property string $name
 * @property string $description
 * @property int $category_id
 * @property float $price
 * @property int|null $offer_id
 * @property int|null $spice
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Allergen[] $allergens
 * @property-read int|null $allergens_count
 * @property-read \App\Models\Category $category
 * @property-read mixed $full_name
 * @property-read \App\Models\Offer|null $offer
 * @method static \Database\Factories\ServingFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Serving newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Serving newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Serving query()
 * @method static \Illuminate\Database\Eloquent\Builder|Serving whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Serving whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Serving whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Serving whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Serving whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Serving whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Serving wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Serving whereSpice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Serving whereVersion($value)
 * @mixin \Eloquent
 */
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
