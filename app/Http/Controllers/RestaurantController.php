<?php

namespace App\Http\Controllers;

use App\Http\Resources\Restaurant\RestaurantListResource;
use App\Http\Resources\Restaurant\RestaurantResource;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index() {
        $restaurants = Restaurant::all();
        return response()->json(RestaurantListResource::collection($restaurants));
    }

    public function show(Request $request, string $id) {
        $restaurant = Restaurant::where("id", $id)->first();
        return response()->json(new RestaurantResource($restaurant));
    }
}
