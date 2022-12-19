<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::get('jakubwojtak/305425/people', [PeopleController::class, 'index']);
Route::get('jakubwojtak/305425/people/{people}', [PeopleController::class, 'show']);
Route::delete('jakubwojtak/305425/people/{people}', [PeopleController::class, 'remove']);
Route::post('jakubwojtak/305425/people', [PeopleController::class, 'create']);
Route::put('jakubwojtak/305425/people/{people}', [PeopleController::class, 'update']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});