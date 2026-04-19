<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Default Route
|--------------------------------------------------------------------------
*/
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



/*
|--------------------------------------------------------------------------
| Load Custom API Routes
|--------------------------------------------------------------------------
*/

// v1
require base_path('routes/rest_api/v1/api.php');

// v2
require base_path('routes/rest_api/v2/api.php');

// v3 (seller)
require base_path('routes/rest_api/v3/seller.php');