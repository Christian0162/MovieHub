<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use Illuminate\Http\Request;

// Route::get('/', function(){
//     return view('homepage');
// });

Route::resource('/movie', MoviesController::class);

require __DIR__.'/auth.php';
