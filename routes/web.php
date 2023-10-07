<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/info", function () {
    return "giorgi bitsadze, 21 wlis, IT studenti, hobi varjishi, gaming";
});

Route::get("/info2", function () {
    return "damatebiti info chemze aq iqneba";
});

Route::get("/info3", function () {
    return "damatebiti info chemze aqac iqneba kidev ertxel";
});

Route::post("/postmessage", function () {
    return response()->json([
        "message" => "წარმატებით დაემატა" 
    ]);
});

Route::put("/postmessage", function () {
    return response()->json([
        "message" => "წარმატებით განახლდა"
    ]);
});

Route::delete("/postmessage", function () {
    return response()->json([
        "message" => "წარმატებით წაიშალა"
    ]);
});
