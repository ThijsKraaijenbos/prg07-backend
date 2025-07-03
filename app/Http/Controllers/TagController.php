<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            "tag_name" => "required"
        ]);
        try {
            $tag = new Tag();
            $tag->tag_name = $validated['tag_name'];
            $tag->save();
            return response()->json($tag);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
