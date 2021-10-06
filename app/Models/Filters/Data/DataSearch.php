<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 17.02.21
 * Time: 14:32
 */

namespace App\Models\Filters\Data;

use App\Models\Data;
use App\Services\Filters\BaseSearch;
use App\Services\Filters\Searchable;

class DataSearch implements Searchable
{
    const MODEL = Data::class;
    use BaseSearch;
}