<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/form',[formController::class,'registration']);
Route::post('/form',[formController::class,'data']);
Route::get('/user/view', [formController::class, 'user_view']);
Route::get('/user/dlt/{id}', [formController::class, 'user_dlt']);
Route::get('/user/edit/{id}', [formController::class, 'user_edit']);
Route::post('/user/update/{id}', [formController::class, 'user_update']);

