<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\AssaginedServer
 *
 * @property int $table_id
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|AssaginedServer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssaginedServer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssaginedServer query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssaginedServer whereTableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssaginedServer whereUserId($value)
 * @mixin \Eloquent
 */
class AssaginedServer extends Pivot
{
    public $timestamps = false;
}
