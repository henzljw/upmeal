<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChecklistsController;

require_once __DIR__ . '/jetstream.php';

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Home page - home.blade.php
Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

// View profile page - view.blade.php
Route::view('/profile', 'profile.view')->name('profile');

// Checklist's && Shopping list's routing
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/checklists', [ChecklistsController::class, 'index'])->name('checklists');

    Route::get('/checklist', [ChecklistsController::class, 'add']);
    Route::post('/checklist', [ChecklistsController::class, 'create']);

    Route::get('/checklist/{checklist}', [ChecklistsController::class, 'edit']);
    Route::post('/checklist/{checklist}', [ChecklistsController::class, 'update']);
});
