<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 16.02.21
 * Time: 12:14
 */

namespace App\Services\Data;


use App\Models\Data;
use App\Models\Filters\Data\DataSearch;
use Illuminate\Http\Request;

class DataService
{

    private $dataSearch;

    /**
     * DataService constructor.
     * @param $dataSearch
     */
    public function __construct(DataSearch $dataSearch)
    {
        $this->dataSearch = $dataSearch;
    }


    public function getItems(Request $request) {
        $items = $this->dataSearch->apply($request)->get();
        return $items;
    }
}