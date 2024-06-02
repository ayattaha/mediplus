<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Medi;

// Route::get('/', function () {
//     return view('test');
// });
 Route::get('/',[Medi::class,'home'])->name('home');