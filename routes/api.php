<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::middleware('http://api.openweathermap.org/data/2.5/forecast?q=Amman&APPID=1d542eac83eaad6d439c47ba406ba70e')->get('/city', function (Request $request) {
//     return $request->city();
// });
