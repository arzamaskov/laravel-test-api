<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RandomNumber;
use App\Http\Resources\RandomNumberResource;

class RandomNumberApiController extends Controller
{
    public function generate()
    {
        $randomNumber = new RandomNumber();
        $randomNumber->number = rand(0, 99999);
        $randomNumber->save();

        return new RandomNumberResource($randomNumber);
    }

    public function retrieve(Request $request)
    {
        $randomNumber = RandomNumber::find($request->id);

        if(!$randomNumber) {
            return response()->json([
                'message' => '404 Number was not found'
            ], 200);
        }

        return response()->json($randomNumber, 200);
    }
}
