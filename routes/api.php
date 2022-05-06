<?php

use App\Http\Controllers\AccesstableController;
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

Route::get('','AccesstableController@index');
Route::get('accesstable/{accesstables}','AccesstableController@show');
Route::post('accesstable','AccesstableController@store');
Route::put('accesstable/{id}','AccesstableController@update');
Route::delete('accesstable/{id}','AccesstableController@delete');


