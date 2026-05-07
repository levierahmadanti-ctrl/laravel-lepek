<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GunungController;

Route::get('/', function () {
    return redirect()->route('gunung.index');
});

Route::resource('gunung', GunungController::class);