<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|blogPage
*/
/**
 * Страница сайта
 */
Route::get('/', [HomeController::class, 'mainPage']);
Route::get('blog-page', [HomeController::class, 'blogPage']);

/**
 * Страница Админки
 */

 Route::get('admin', [AdminController::class, 'dashboard'])->name('admin');

 /**
 * CRUD для категорий
 */

 Route::get('admin/categories',[CategoryController::class, 'allCategoriesPage'])->name('genre');
 Route::get('admin/categories/create',[CategoryController::class, 'createCategory'])->name('genre.create');
 Route::post('admin/categories/create',[CategoryController::class, 'storeCategory'])->name('store.category');
 Route::get('admin/categories/{category}/edit',[CategoryController::class, 'editCategory'])->name('edit.category');
 Route::put('admin/categories/{category}/edit',[CategoryController::class, 'updateCategory'])->name('update.category');
 Route::delete('admin/categories/{category}',[CategoryController::class, 'deleteCategory'])->name('delete.category');

