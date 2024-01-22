<?php

use App\Http\Controllers\Blog;
use App\Http\Controllers\Category;

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

Auth::routes();

Route::get('/', function () {
    return view('pages.index');
});

// Route::get('/category', function () {
//     return view('pages.category');
// })->name('page.category');



Route::get('/blog/{id}', [Blog::class, 'blogview']);


Route::prefix('admin')->as('admin.')->middleware(['auth'])->group(function () {

// Admin Panel
// Route::get('/admin', function () {
//     return view('admin.admin-index');
// })->name('admin-index');

// Route::get('/admin/new-blog', function () {
//     return view('admin.new-blog');
// })->name('new.blog.index');
    Route::get('/', [Blog::class, 'index']);
    Route::get('/', [Category::class, 'index']);

    Route::resource('category', Category::class);

    Route::resource('blog', Blog::class);
    Route::post('/mediaupload', [Blog::class, 'upload'])->name('blog.media.upload');



// Route::prefix('category')->controller(Category::class)->group(function () {

    // Route::get('/', 'index');
    // Route::get('create', 'create')->name('new.blog.create');
    // Route::post('/', 'store')->name('new.blog.store');
    // Route::get('edit/{id}', 'edit')->name('new.blog.edit');
    // Route::update('{id}', 'update')->name('new.blog.update');
    // Route::delete('{id}', 'delete')->name('new.blog.delete');

// });
// Route::post('new-blog/store', [category::class, 'store'])->name('new.blog.store');
// Route::post('/admin/new-blog', function () {
//     return view('admin.new-blog');
// })->name('new.blog.store');

// Route::get('/admin/edit-blog', function () {
//     return view('admin.edit-blog');
// })->name('edit.blog');

// Route::get('/admin/blog-list', function () {
//     return view('admin.list-blog');
// })->name('blog.list');
});
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
