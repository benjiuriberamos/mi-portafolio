<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;

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


Route::get('/symfony', [SkillsController::class, 'symfony'])->name('symfony');
Route::get('/laravel', [SkillsController::class, 'laravel'])->name('laravel');
Route::get('/node', [SkillsController::class, 'node'])->name('node');