<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::group(['prefix' => 'user'], function(){
    Route::get('/',[UserController::class, 'all_user'])->name('all.user');
});