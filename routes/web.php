<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectsController;
use App\Models\Project;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::post('/projects', [ProjectsController::class, 'store']);
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects/{project}', [ProjectsController::class, 'show']);

Route::resource('products', ProductController::class);
Route::get('products', [ProductController::class, 'index'])->name('products');
