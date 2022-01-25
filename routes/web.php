<?php

require_once __DIR__ . '/jetstream.php';

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChecklistsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

// MULTI AUTH
Route::get('/', [HomeController::class, 'checkUserType']);

// ADMIN DASHBOARD
Route::get('/admin/dashboard', function () {
    return view('admin-dashboard');
})->name('admin.dashboard');

Route::get('/admin/dashboard', [DashboardController::class, 'totalUsers'])->name('admin.dashboard');

// USER MANAGEMENT
Route::get('admin/users', [UserController::class, 'show'])->name('users');

// USER DASHBOARD / HOME
Route::get('/home', function () {
    return view('home');
})->name('home');

// USER PROFILE
Route::view('/profile', 'profile.view')->name('profile');

// CHECKLIST / SHOPPING LIST
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/checklists', [ChecklistsController::class, 'index'])->name('checklists');

    Route::get('/checklist', [ChecklistsController::class, 'add']);
    Route::post('/checklist', [ChecklistsController::class, 'create']);

    Route::get('/checklist/{checklist}', [ChecklistsController::class, 'edit']);
    Route::post('/checklist/{checklist}', [ChecklistsController::class, 'update']);

    Route::delete('/checklist/{checklist}', [ChecklistsController::class, 'delete'])->name('checklist.destroy');
});


// UNUSED CODE

// Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
//     return view('home');
// })->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');