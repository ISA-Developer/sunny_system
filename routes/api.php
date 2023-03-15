<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthenticatedSessionController::class, 'storeSanctum'])
    ->name('login.sanctum');

Route::middleware('auth:sanctum')->group( function () {
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroySanctum'])
        ->name('logout.sanctum');


});
