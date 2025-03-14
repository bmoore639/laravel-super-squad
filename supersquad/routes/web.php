<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;

Route::get('/', function () {
    return view('super-heroes.index');
});




Route::resource('Heroes', HeroController::class);
Route::redirect('/', '/Heroes');