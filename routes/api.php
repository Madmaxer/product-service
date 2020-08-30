<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$prefix = config('app.route_prefix') . '/v1';

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

Route::group(
    ['prefix' => $prefix, 'middleware' => ['web', 'auth']],
    function (): void {
        Route::post('/product', 'v1\ProductController@create');
        Route::patch('/product/{product}', 'v1\ProductController@update');
        Route::delete('/product/{product}', 'v1\ProductController@delete');
    }
);

Route::group(
    ['prefix' => $prefix],
    function (): void {
        Route::get('/product', 'v1\ProductController@read');
    }
);
