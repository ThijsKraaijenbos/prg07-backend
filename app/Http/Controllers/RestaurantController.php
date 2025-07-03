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

    public function store(Request $request) {
        $validated = $request->validate([
            "name" => "required",
            "description" => "required",
            "img_url" => "required",
            "star_count" => "required",
            "address" => "required",
            "latitude" => "required",
            "longitude" => "required",
            "tags"    => "required|array|min:1",
            "tags.*"  => "required|integer|distinct|exists:tags,id",
        ]);

        try {
            $restaurant = new Restaurant();
            $restaurant->name = $validated['name'];
            $restaurant->description = $validated['description'];
            $restaurant->img_url = $validated['img_url'];
            $restaurant->star_count = $validated['star_count'];
            $restaurant->address = $validated['address'];
            $restaurant->latitude = $validated['latitude'];
            $restaurant->longitude = $validated['longitude'];
            $restaurant->save();
            $restaurant->tags()->attach($validated['tags']);

            $restaurant->load("tags");
            return response()->json($restaurant);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function show(Request $request, string $id) {
        $restaurant = Restaurant::where("id", $id)->first();
        return response()->json(new RestaurantResource($restaurant));
    }
}
