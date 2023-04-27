<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index()
    {
        $shoes = Shoe::all();
        return response()->json($shoes);
    }

    public function store(Request $request)
    {
        $shoe = new Shoe;
        $shoe->name = $request->name;
        $shoe->brand = $request->brand;
        $shoe->price = $request->price;
        $shoe->details = $request->details;
        $shoe->save();

        return response()->json($shoe);
    }

    public function show($id)
    {
        $shoe = Shoe::find($id);
        return response()->json($shoe);
    }

    public function update(Request $request, $id)
    {
        $shoe = Shoe::find($id);
        $shoe->name = $request->name;
        $shoe->brand = $request->brand;
        $shoe->price = $request->price;
        $shoe->details = $request->details;
        $shoe->save();

        return response()->json($shoe);
    }

    public function destroy($id)
    {
        $shoe = Shoe::find($id);
        $shoe->delete();

        return response()->json(['message' => 'Shoe deleted successfully']);
    }
}
