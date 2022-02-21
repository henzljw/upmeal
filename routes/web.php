<?php

require_once __DIR__ . '/jetstream.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChecklistsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;
use App\Http\Livewire\PostsList;

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

// USER LIST & USER MANAGEMENT
Route::get('admin/users', [UserController::class, 'show'])->name('users');

// USER DASHBOARD / HOME
Route::get('/home', function () {
    return view('home');
})->name('home');

// USER PROFILE
Route::view('/profile', 'profile.view')->name('profile');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // CHECKLIST & SHOPPING LIST
    Route::controller(ChecklistsController::class)->group(function () {
        Route::get('/checklists', 'index')->name('checklists');
        Route::get('/checklist', 'add');
        Route::post('/checklist', 'create');
        Route::get('/checklist/{checklist}', 'edit');
        Route::post('/checklist/{checklist}', 'update');
        Route::delete('/checklist/{checklist}', 'delete')->name('checklist.destroy');
    });
    // POSTS
    Route::controller(PostsController::class)->group(function () {
        Route::get('/posts', 'index')->name('posts');
        Route::get('/post/view/{post}', 'show');
        Route::get('/post', 'add');
        Route::post('/post', 'create');
        Route::get('/post/{post}', 'edit');
        Route::post('/post/{post}', 'update');
        Route::delete('/post/{post}', 'delete')->name('posts.destroy');
    });
});

// SHOW ALL POST
Route::get('lists', PostsList::class);

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