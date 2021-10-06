<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Data\DataService;
use App\Services\Response\ResponseServise;
use Illuminate\Http\Request;

class DataController extends Controller
{

    protected $service;

    /**
     * DataController constructor.
     * @param $service
     */
    public function __construct(DataService $dataService)
    {
        $this->service = $dataService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return ResponseServise::sendJsonResponse(true, 200,[],[
            'items' => $this->service->getItems($request)
        ]);
    }

}
