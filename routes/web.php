<?php

require_once __DIR__ . '/jetstream.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChecklistsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CuisineController;
use App\Http\Controllers\RecipeLibraryController;
use App\Http\Controllers\WishlistController;
use App\Http\Livewire\PostsList;
use App\Http\Livewire\UsersList;
use App\Http\Livewire\UsersProfile;
use App\Http\Livewire\RecentPosts;

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
Route::get('admin/users', UsersList::class)->name('users');

// USER PROFILE
Route::get('profile', UsersProfile::class)->name('profile');

// USER DASHBOARD / HOME
Route::get('/home', function () {
    return view('home');
})->name('home');

// SHOW ALL RECIPES
Route::get('lists', PostsList::class);

// SHOW RECENT RECIPES
Route::get('recent', RecentPosts::class);

// SEARCH RECIPES
Route::get('/search', function () {
    return view('search.search');
})->name('search');

// SAVE MEALS
Route::resource('wishlist', WishlistController::class);

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
    // RECIPES
    Route::controller(PostsController::class)->group(function () {
        Route::get('/posts', 'index')->name('posts');
        Route::get('/post/view/{post}', 'show');
        Route::get('/post', 'create');
        Route::post('/post', 'store');
        Route::get('/post/{post}', 'edit');
        Route::post('/post/{post}', 'update');
        Route::delete('/post/{post}', 'delete')->name('posts.destroy');
    });
    // CUISINES
    Route::controller(CuisineController::class)->group(function () {
        Route::get('/admin/cuisines', 'index')->name('cuisines');
        Route::get('/cuisine', 'create');
        Route::post('/cuisine', 'store');
        Route::get('/cuisine/{cuisine}', 'edit');
        Route::put('/cuisine/{cuisine}', 'update');
        Route::get('/delete-cuisine/{cuisine}', 'destroy');
    });
    // RECIPE LIBRARY
    Route::controller(RecipeLibraryController::class)->group(function () {
        // SHOW ALL CUISINE TYPE
        Route::get('library', 'index')->name('library');
        // SHOW CUISINE RESULTS
        Route::get('library/{cuisine_slug}', 'showResults');
        // SHOW A SINGLE RECIPE IN CUISINE
        Route::get('library/{cuisine_slug}/{post_slug}', 'show');
    });
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