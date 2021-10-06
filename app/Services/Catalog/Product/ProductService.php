<?php


namespace App\Services\Catalog\Product;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{

    public function getItems(Request $request)
    {
        return Product::all();
    }
}
