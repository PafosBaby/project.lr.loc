<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RollPermissionController;
use App\Http\Controllers\TagController;
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

Route::get('change-locale/{locale}', [HomeController::class, 'changeLocale'])->name('app.change-locale');

/**
 * Страница сайта
 */

Route::middleware(['locale'])->group(function () {
    Route::get('/', [HomeController::class, 'mainPage']);
    Route::get('blog-page/{categorySlug}', [HomeController::class, 'blogPage'])->name('app.blog.category');
    Route::get('blog-page/{categorySlug}/{articleSlug}', [HomeController::class, 'articlePage'])->name('app.blog.article');
    Route::post('blog/{article}add-comment',[CommentController::class, 'store'])->name('app.article.add-comment');
    Route::middleware(['guest'])->group(function () {
        Route::get("register", [AuthController::class, 'registerPage'])->name('register');
        Route::post("register", [AuthController::class, 'register'])->name('register.store');
        Route::get("login", [AuthController::class, 'loginPage'])->name('login');
        Route::post("login", [AuthController::class, 'login'])->name('login.auth');
    });


    /**
     * Страница Админки
     */
    Route::prefix('admin')->middleware('auth', 'admin')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin');
        /**
         * CRUD для категорий
         */
        Route::prefix('categories')->group(function () {
            Route::get('/', [CategoryController::class, 'allCategoriesPage'])->name('genre');
            Route::get('create', [CategoryController::class, 'createCategory'])->name('genre.create');
            Route::post('create', [CategoryController::class, 'storeCategory'])->name('store.category');
            Route::get('{category}/edit', [CategoryController::class, 'editCategory'])->name('edit.category');
            Route::put('{category}/edit', [CategoryController::class, 'updateCategory'])->name('update.category');
            Route::delete('{category}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
        });

        /**
         * CRUD для новостей
         */
        Route::resource('articles', ArticleController::class);
        Route::get('articles/{article}/remove-image', [ArticleController::class, 'removeImage'])->name('admin.articles.remove-img');

        /**
         * CRUD для TAG
         */
        Route::resource('tags', TagController::class);
        /**
         * CRUD для ролей
         */

         Route::get('roles', [RollPermissionController::class])->name('admin.roles');
    });
});
