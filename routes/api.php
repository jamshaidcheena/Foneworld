<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('view_bookings', [ProductController::class, 'view_bookings_api']);
Route::post('add_products', [ProfileController::class, 'add_products']);
Route::post('edit_products/{id}', [ProfileController::class, 'edit_products']);
Route::get('delete_products/{id}', [ProfileController::class, 'delete_products']);
Route::get('get_list_products', [ProfileController::class, 'get_list_products']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
