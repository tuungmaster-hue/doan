<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'homepage'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'aboutpage'])->name('about');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'productpage'])->name('product');
Route::get('/deltai_product/{id}', [App\Http\Controllers\HomeController::class, 'deltai_product'])->name('deltai_product');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contactpage'])->name('contact');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blogpage'])->name('blog');
Route::get('/blog/{id}', [App\Http\Controllers\HomeController::class, 'deltaiblog'])->name('deltaiblog');

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard.index');
})->name('dashboard');

Route::get('/Admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('admin.user.index');
Route::get('/Admin/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('admin.user.create');
Route::post('/Admin/user', [App\Http\Controllers\UserController::class, 'store'])->name('admin.user.store');
Route::get('/Admin/user/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.user.edit');
Route::get('/Admin/user/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('admin.user.show');
Route::put('/Admin/user/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('admin.user.update');
Route::delete('/Admin/user/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('admin.user.destroy');

// Product Management
Route::get('/Admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('admin.product.index');
Route::get('/Admin/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('admin.product.create');
Route::post('/Admin/product', [App\Http\Controllers\ProductController::class, 'store'])->name('admin.product.store');
Route::get('/Admin/product/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('admin.product.edit');
Route::get('/Admin/product/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('admin.product.show');
Route::put('/Admin/product/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('admin.product.update');
Route::delete('/Admin/product/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('admin.product.destroy');

Route::get('/Admin/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('admin.blogs.index');
Route::get('/Admin/blogs/create', [App\Http\Controllers\BlogController::class, 'create'])->name('admin.blogs.create');
Route::post('/Admin/blogs', [App\Http\Controllers\BlogController::class, 'store'])->name('admin.blogs.store');
Route::get('/Admin/blogs/{blog}/edit', [App\Http\Controllers\BlogController::class, 'edit'])->name('admin.blogs.edit');
Route::get('/Admin/blogs/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('admin.blogs.show');
Route::put('/Admin/blogs/{blog}', [App\Http\Controllers\BlogController::class, 'update'])->name('admin.blogs.update');
Route::delete('/Admin/blogs/{blog}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('admin.blogs.destroy');
