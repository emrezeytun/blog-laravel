<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

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
Route::prefix('admin')->middleware('isLogin')->group(function() {  //prb

    Route::get('login', [App\Http\Controllers\back\AuthController::class, 'index'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\back\AuthController::class, 'loginPost'])->name('admin.loginPost');

});



Route::prefix('admin')->middleware('isAdmin')->group(function() {

    Route::get('panel', [App\Http\Controllers\back\Homepage::class, 'index'])->name('admin.home');
    Route::get('articles/trashed', [App\Http\Controllers\back\ArticleController::class, 'trashed'])->name('articles.trashed');

    Route::get('summary', [App\Http\Controllers\back\SummaryController::class, 'index'])->name('summary.index');
    Route::get('articles/recoveryArticle/{id}', [App\Http\Controllers\back\ArticleController::class, 'recoveryArticle'])->name('articles.recovery');

    Route::get('articles/hardDelete/{id}', [App\Http\Controllers\back\ArticleController::class, 'hardDelete'])->name('articles.hardDelete');

    Route::get('category', [App\Http\Controllers\back\CategoryController::class, 'index'])->name('category.list');

    Route::get('pages', [App\Http\Controllers\back\PageController::class, 'index'])->name('pages.list');

    Route::get('pages/create', [App\Http\Controllers\back\PageController::class, 'create'])->name('pages.create');

    Route::get('sidebar/about', [App\Http\Controllers\back\SidebarController::class, 'about'])->name('sidebar.about');

    Route::post('sidebar/about', [App\Http\Controllers\back\SidebarController::class, 'aboutPost'])->name('sidebar.about.post');

    Route::post('pages/create', [App\Http\Controllers\back\PageController::class, 'createPost'])->name('pages.create.post');

    Route::get('pages/edit/{id}', [App\Http\Controllers\back\PageController::class, 'pageEdit'])->name('pages.edit');

    Route::post('pages/menuOn', [App\Http\Controllers\back\PageController::class, 'pageMenuOn'])->name('pages.menu.on');

    Route::post('pages/edit', [App\Http\Controllers\back\PageController::class, 'editPost'])->name('pages.edit.post');

    Route::get('pages/delete/{id}', [App\Http\Controllers\back\PageController::class, 'deletePage'])->name('pages.delete');

    Route::get('settings', [App\Http\Controllers\back\Settings::class, 'index'])->name('settings');

    Route::post('settings', [App\Http\Controllers\back\Settings::class, 'update'])->name('settings.update');


    Route::get('category/edit/{id}', [App\Http\Controllers\back\CategoryController::class, 'editCategory'])->name('category.edit');

    Route::get('category/delete/{id}', [App\Http\Controllers\back\CategoryController::class, 'deleteCategory'])->name('category.delete');


    Route::post('category/edit/{id}', [App\Http\Controllers\back\CategoryController::class, 'editCategoryPost'])->name('category.edit');



    Route::post('category', [App\Http\Controllers\back\CategoryController::class, 'addCategory'])->name('category.add');


    Route::resource('articles', 'App\Http\Controllers\back\ArticleController');

    Route::get('logout', [App\Http\Controllers\back\AuthController::class, 'logout'])->name('admin.logout');

    Route::get('articles/deleteArticle/{id}', [App\Http\Controllers\back\ArticleController::class, 'deleteArticle'])->name('articles.delete');



});

Route::get('admin/login', [App\Http\Controllers\back\AuthController::class, 'index'])->name('admin.login');
Route::post('admin/login', [App\Http\Controllers\back\AuthController::class, 'loginPost'])->name('admin.loginPost');


///////////////////////////////////////////////////////////////////

Route::get('/', 'App\Http\Controllers\front\Homepage@index')->name('homepage');
Route::get('/search', 'App\Http\Controllers\front\Homepage@search')->name('search');
Route::post('/search', 'App\Http\Controllers\front\Homepage@searchPost')->name('searchPost');
Route::get('/contact', 'App\Http\Controllers\front\Homepage@contact')->name('contact');
Route::post('/contact', 'App\Http\Controllers\front\Homepage@contactPost')->name('contactPost');
Route::get('/page/{page}', 'App\Http\Controllers\front\Homepage@page')->name('page');
Route::get('/{category}/{slug}', 'App\Http\Controllers\front\Homepage@single')->name('single');
Route::get('/{category}', 'App\Http\Controllers\front\Homepage@categoryPage')->name('category');
Route::post('/{category}/{slug}', 'App\Http\Controllers\front\Homepage@singlePageComment')->name('singleComment');




