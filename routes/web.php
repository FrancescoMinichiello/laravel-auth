<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/pojects', [AdminProjectController::class, "index"])->name('admin.projects.index');
Route::get('/pojects/{id}', [AdminProjectController::class, "create"])->name('admin.projects.create');
Route::get('/pojects/create', [AdminProjectController::class, "show"])->name('admin.projects.show');
Route::post('/pojects', [AdminProjectController::class, "store"])->name('admin.projects.store');
