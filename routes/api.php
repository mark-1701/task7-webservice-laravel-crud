<?php

use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/user', UserController::class);
Route::resource('/departament', DepartamentController::class);
