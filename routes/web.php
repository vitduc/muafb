<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\NotificationController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\Dashboard;

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

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/post_login', [LoginController::class, 'postLogin'])->name('post.login');
Route::post('/register', [RegisterController::class, 'postRegister'])->name('post.register');


Route::get('/', [HomeController::class, 'indexAction'])->name('home');


// Route::prefix('admin')->group(function () {
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/',  [Dashboard::class, 'index'])->name('dashboard');

//user
    Route::get('/users',  [UserController::class, 'indexAction'])->name('admin.users');
    Route::get('/user/{id}',  [UserController::class, 'rechargerAction'])->name('admin.recharger');
    Route::post('/user',  [UserController::class, 'postRechargerAction'])->name('post.recharger');


//category
    Route::get('/category',  [CategoryController::class, 'indexAction'])->name('admin.category');
    Route::post('/category',  [CategoryController::class, 'postAction'])->name('post.category');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'deleteAction'])->name('delete.category');


//Product
    Route::get('/product',  [ProductController::class, 'indexAction'])->name('admin.product');
    Route::get('/product/create',  [ProductController::class, 'create'])->name('create.product');
    Route::post('/product',  [ProductController::class, 'store'])->name('post.product');
    Route::get('/product/edit/{id}',  [ProductController::class, 'edit'])->name('edit.product');
    Route::post('/product/update',  [ProductController::class, 'update'])->name('update.product');
    Route::delete('/product/delete/{id}', [ProductController::class, 'deleteAction'])->name('delete.product');

// Contact
    Route::get('/contact',  [ContactController::class, 'indexAction'])->name('admin.contact');

// Notification
    Route::get('/notification',  [NotificationController::class, 'indexAction'])->name('admin.notification');
    Route::get('/notification/edit/{id}',  [NotificationController::class, 'editAction'])->name('edit.notification');
    Route::post('/notification',  [NotificationController::class, 'postAction'])->name('post.notification');
    Route::delete('/notification/delete/{id}', [NotificationController::class, 'deleteAction'])->name('delete.notification');
});


