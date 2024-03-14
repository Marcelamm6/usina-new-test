<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exampleController;

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

Route::get('/', [exampleController::class, "homepage"]);
Route::get('/about', [exampleController::class, "aboutPage"] );

Route::post('/register', );