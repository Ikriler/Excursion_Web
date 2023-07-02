<?php

namespace App\Http\Controllers;

use App\Models\Excursion;
use Illuminate\Http\Request;

class ExcursionController extends Controller
{
    public function index(Request $request) {
        $excursions = Excursion::all();

        return response()->json(["message"=>"success", "records" => $excursions, "total" => $excursions->count()], 200);
    }

    public function store(Request $request) {
        $excursion = Excursion::make(
            $request->input("imagePath"),
            $request->input("description"),
            $request->input("name"),
            $request->input("active")
        );

        $excursion->save();

        return response()->json(["message" => $excursion !== null ? "success" : "error"], $excursion ? 200 : 500);
    }
}
