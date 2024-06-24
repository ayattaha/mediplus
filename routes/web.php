<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Medi;

// Route::get('/', function () {
//     return view('test');
// });
Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    // Your routes
   
 Route::get('/',[Medi::class,'home'])->name('home');

});