<?php

use App\Http\Controllers\Api\FlyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/flies', FlyController::class);


// 1º teste de rota.
Route::get('/', function () {
    return response()->json(['message' => 'success']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
