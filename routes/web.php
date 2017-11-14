<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
// 	Schema::create('forcast',function($ myTable) {
// $myTable ->increments('id');
// $myTable ->string('name');
// $myTable ->string('lastname',30);

// $myTable ->string('description',500);
// });
     return view('welcome');

});
Route::get('may', function () {
    return 'welcome may ';
});
// Route::get('city', function () {
//     return view('city');
// });