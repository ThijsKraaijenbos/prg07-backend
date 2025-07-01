<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/restaurants", [RestaurantController::class, "index"]);
Route::get("/restaurants/{id}", [RestaurantController::class, "show"]);
