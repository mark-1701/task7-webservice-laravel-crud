<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserWebController;
use Illuminate\Support\Facades\Route;

Route::resource('/user', UserWebController::class);