<?php

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/restaurants", [RestaurantController::class, "index"]);
Route::get("/restaurants/{id}", [RestaurantController::class, "show"]);
Route::post("/restaurants", [RestaurantController::class, "store"]);
Route::post("/tags", [TagController::class, "store"]);
