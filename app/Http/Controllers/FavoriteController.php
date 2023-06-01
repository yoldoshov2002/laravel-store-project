<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function index()
    {
        return auth()->user()->favorites()->paginate(20);
    }

    public function store(Request $request)
    {
        auth()->user()->favorites()->attach($request->product_id);

        return response()->json([
            "success" => true,
        ]);
    }

    /**
     *
     * Todo refrector responses make standart format
     */

    public function destroy($favorite_id)
    {
        if(auth()->user()->hasFavorite($favorite_id)){
            auth()->user()->favorites()->detach($favorite_id);

            return response()->json([
                "success" => true
            ]);
        }
        return response()->json([
            "success" => false,
            "message" => 'Favorite does not exist in this user'
        ]);

    }
}
