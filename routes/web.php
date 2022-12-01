<?php

// use App\Http\Controllers\AdminPanelController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostsController;
// use App\Models\Post;
// use App\Services\Newsletter;
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

// Home page and navigation links
Route::get('/', [HomeController::class, 'index']);
Route::get('/manifesto', [HomeController::class, 'manifesto']);
Route::get('/fardelliditalia', [HomeController::class, 'fardelliditalia']);

// Posts
Route::resource('/posts', PostsController::class);

// pubblica
Route::get('/posts/{slug}/publish', [PostsController::class, 'publish']);

// Newsletter
Route::post('newsletter', NewsletterController::class);

// Comments
Route::post('/posts/{post:slug}/comments', [CommentController::class, 'store']);
// Replies
Route::post('/posts/{post:slug}/reply', [CommentController::class, 'replyStore']);

// Google and Facebook login
// Route::middleware('guest')->group(function () {
//     Route::get('googlelogin', [RegisteredUserController::class, 'create'])
//                 ->name('register');
//     Route::post('register', [RegisteredUserController::class, 'store']);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
