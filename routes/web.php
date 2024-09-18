<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get("/",[TodoController::class,"index"])->name("index");
Route::get("/create",[TodoController::class,"create"])->name("create");
Route::post("/store",[TodoController::class,"store"])->name("store");


