<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 17.02.21
 * Time: 22:58
 */

namespace App\Models\Filters\Data;


use App\Services\Filters\Filterable;
use Illuminate\Database\Eloquent\Builder;

class Bedrooms implements Filterable
{

    public static function apply(Builder $builder, $value)
    {
        return $builder->where('bedrooms', $value);
    }
}