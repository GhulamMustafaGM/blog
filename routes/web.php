<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TasksController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [TasksController::class, 'index']);

Auth::routes();

Route::get('/task',[TasksController::class, 'add']);
Route::post('/task',[TasksController::class, 'create']);

Route::get('/task/{task}', [TasksController::class, 'edit']);
Route::post('/task/{task}', [TasksController::class, 'update']);