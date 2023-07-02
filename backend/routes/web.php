<?php

use App\Http\Controllers\ExcursionController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/api', function () {
    return view('app');
});

Route::get('/api/test', function() {
    return response()->json(["id" => 1, "message" => "ohhh yes"]);
    // return ["id" => 1, "message" => "ohhh yessss"];
});

Route::post("/api/excursion/store", [ExcursionController::class, "store"]);

Route::get('/api/token', function() {
    return response()->json(["token" => csrf_token()]);
});

Route::get('/api/excursion/index', [ExcursionController::class, "index"]);