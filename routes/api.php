<?php

use App\Http\Controllers\Api\Catalog\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product',[ProductController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);





Route::post('/tokens/create', function (Request $request) {
    $user = \App\Models\User::first();
    $token = $user->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

