<?php

use App\Http\Controllers\Api\FlyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/flies', [FlyController::class, 'index']);
Route::middleware('auth:api')->get('/flies/{identify}/', [FlyController::class, 'show']);

Route::post('/login', function(Request $request) {

    $credentials = $request->only(['email', 'password']);

    if(!$token = auth()->attempt($credentials)) {
        abort(401, 'Unauthorized');
    }

    return response()->json([
        'data' => [
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ],
    ]);
});
