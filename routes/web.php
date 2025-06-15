<?php

use Illuminate\Support\Facades\Route;

Route::get('/inicio', function () {
    return view('dashboard');
})->name('admin.dashboard');


foreach (glob(__DIR__ . '/modulos/*.php') as $file) {
    require $file;
}
