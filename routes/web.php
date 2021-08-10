<?php

use App\Http\Controllers\CompagniesController;
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

Route::resource('compagnie', CompagniesController::class);
Route::post('/compagnie/destroy-all', [CompagniesController::class, "destroyAll"]);