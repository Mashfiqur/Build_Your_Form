<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Form;
use App\Http\Controllers\PostController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Form::class)->name('home');
Route::get('/post_data/{id}', [PostController::class, 'post_data']);
Route::get('/view_data/{id}', [PostController::class, 'view_data']);
Route::post('/submit', [PostController::class, 'submit_data']);
