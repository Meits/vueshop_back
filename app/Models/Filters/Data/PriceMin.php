<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 17.02.21
 * Time: 23:00
 */

namespace App\Models\Filters\Data;


use App\Services\Filters\Filterable;
use Illuminate\Database\Eloquent\Builder;

class PriceMin implements Filterable
{

    public static function apply(Builder $builder, $value)
    {
        return $builder->where('price','>=', $value);
    }
}