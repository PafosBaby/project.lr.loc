<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RollPermissionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
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
    Route::post('blog/{article}add-comment', [CommentController::class, 'store'])->name('app.article.add-comment');
    Route::get('catalog/{product}', [HomeController::class,"productPage"])->name('app.product');
    Route::get('catalog', [HomeController::class , 'catalogPage'])->name('app.catalog');
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
            Route::get('/', [CategoryController::class, 'allCategoriesPage'])->middleware(['permission:view genres'])->name('genre');
            Route::get('create', [CategoryController::class, 'createCategory'])->middleware(['permission:create genres'])->name('genre.create');
            Route::post('create', [CategoryController::class, 'storeCategory'])->middleware(['permission:create genres'])->name('store.category');
            Route::get('{category}/edit', [CategoryController::class, 'editCategory'])->middleware(['permission:edit genres'])->name('edit.category');
            Route::put('{category}/edit', [CategoryController::class, 'updateCategory'])->middleware(['permission:edit genres'])->name('update.category');
            Route::delete('{category}', [CategoryController::class, 'deleteCategory'])->middleware(['permission:delete genres'])->name('delete.category');
        });

        /**
         * CRUD для новостей
         */
        Route::resource('articles', ArticleController::class)->middleware(['permission:view news']);

        Route::get('articles/create',[ArticleController::class,'create'])->middleware(['permission:add news'])->name('articles.create');
        Route::post('articles/create',[ArticleController::class,'store'])->middleware(['permission:add news'])->name('articles.store');
        Route::get('articles/{article}/edit', [ArticleController::class, 'edit'])->middleware(['permission:edit news'])->name('articles.edit');
        Route::get('articles/{article}/remove-image', [ArticleController::class, 'removeImage'])->middleware(['permission:delete img'])->name('admin.articles.remove-img');
        Route::delete('{article}', [ArticleController::class, 'destroy'])->middleware(['permission:delete news'])->name('articles.destroy');
        /**
         * CRUD для TAG
         */
        Route::resource('tags', TagController::class)->middleware(['permission:view tags']);
        /**
         * CRUD для ролей
         */
        Route::prefix('roles')->group(function () {
            Route::get('/', [RollPermissionController::class, 'rolesPage'])->middleware(['permission:view roles'])->name('admin.roles');
            Route::get('roles/create', [RollPermissionController::class, 'roleForm'])->middleware(['permission:create roles'])->name('admin.roles.form');
            Route::post('roles/create', [RollPermissionController::class, 'storeRole'])->middleware(['permission:create roles'])->name('admin.roles.store');
            Route::get('{role}/edit', [RollPermissionController::class, 'editRole'])->middleware(['permission:edit roles'])->name('admin.roles.edit');
            Route::put('{role}/edit', [RollPermissionController::class, 'updateRole'])->middleware(['permission:edit roles'])->name('admin.roles.update');
            Route::delete('{role}', [RollPermissionController::class, 'deleteRole'])->middleware(['permission:delete roles'])->name('admin.roles.delite');
        });

        /**
         * CRUD для прав
         */
        Route::prefix('permissions')->middleware(['role:admin'])->group(function () {
            Route::get('/', [RollPermissionController::class, 'permissionsPage'])->name('admin.permissions');
            Route::get('create', [RollPermissionController::class, 'permissionForm'])->name('admin.permission.form');
            Route::post('create', [RollPermissionController::class, 'storePermission'])->name('admin.permission.store');
            Route::delete('{permission}', [RollPermissionController::class, 'deletePermission'])->name('admin.permission.delite');
        });

        /**
         * CRUD для пользователей
         */
        Route::prefix('users')->middleware(['role:admin|moderator'])->group(function () {
            Route::get('/', [UserController::class, 'usersPage'])->name('admin.users');
            Route::get('{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
            Route::put('{user}/edit', [UserController::class, 'update'])->name('admin.users.update');
        });

          /**
         * CRUD для товаров
         */

         Route::resource('products', ProductController::class);
    });
});
