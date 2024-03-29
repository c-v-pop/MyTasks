<?php

use App\Http\Controllers\TaskController;
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

Route::get('/',[TaskController::class, 'index']) ->name('index');
Route::get('/mytasks/create', [TaskController::class, 'create']) ->name('create');

Route::post('/',[TaskController::class, 'store']) ->name('store');
/*
Route::resource('mytasks', TaskController::class);
*/