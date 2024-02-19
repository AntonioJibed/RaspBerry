<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'getHome'])->name('welcome');

Route::get('/catalog', [CatalogController::class, 'getIndex'])->name('catalog');

Route::get('/catalog/show/{id?}', [CatalogController::class, 'getShow'])
    ->where(['id' => '[0-9]+'])
    ->name('show');

Route::get('/catalog/create', [CatalogController::class, 'getCreate'])->name('create');

Route::get('/catalog/edit/{id?}', [CatalogController::class, 'getEdit'])
    ->where(['id' => '[0-9]+'])
    ->name('edit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
