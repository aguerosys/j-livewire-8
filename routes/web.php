<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Models\Course;
use App\Models;
use App\Models\Post;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('curso/{course:slug}', [PageController::class, 'course'])->name('course');

//section course create - read - edit - delete
Route::get('curso', [CourseController::class, 'create'])->name('courses.index');
Route::post('curso/store', [CourseController::class, 'store'])->name('courses.store');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->middleware('auth')->name('courses.destroy');

//section content of course create - read - edit - delete
Route::get('post', [PostController::class, 'create'])->name('posts.index');
Route::post('post/store', [PostController::class, 'store'])->name('posts.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
