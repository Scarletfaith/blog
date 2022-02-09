<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Blog\MainController;
use App\Http\Controllers\Blog\ShowController;
use App\Http\Controllers\Category\CategoryController;
//use App\Http\Controllers\Admin\Category\IndexController;
//use App\Http\Controllers\PostsController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::group(['namespace' => 'Blog'], function() {
    Route::get('/', 'IndexController');
});*/

//Route::get('/', [MainController::class, 'index']);

//Route::resource('/posts', PostsController::class);

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'PostController@index')->name('admin.post.index');
        Route::get('/create', 'PostController@create')->name('admin.post.create');
        Route::post('/', 'PostController@store')->name('admin.post.store');
        Route::get('/{id}', 'PostController@show')->name('admin.post.show');
        Route::get('/{id}/edit', 'PostController@edit')->name('admin.post.edit');
        Route::patch('/{id}', 'PostController@update')->name('admin.post.update');
        Route::delete('/{id}', 'PostController@delete')->name('admin.post.delete');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'CategoryController@index')->name('admin.category.index');
        Route::get('/create', 'CategoryController@create')->name('admin.category.create');
        Route::post('/', 'CategoryController@store')->name('admin.category.store');
        Route::get('/{id}', 'CategoryController@show')->name('admin.category.show');
        Route::get('/{id}/edit', 'CategoryController@edit')->name('admin.category.edit');
        Route::patch('/{id}', 'CategoryController@update')->name('admin.category.update');
        Route::delete('/{id}', 'CategoryController@delete')->name('admin.category.delete');
    });
});

require __DIR__.'/auth.php';

Route::get('/{slug}', 'SlugController@call');

Route::group(['namespace' => 'Category'], function () {
    Route::get('/{category}', 'SlugController@category')->name('category.index');
});

Route::group(['namespace' => 'Blog'], function () {
    Route::get('/', 'MainController@index')->name('blog.index');
    Route::get('/{post}', 'SlugController@post')->name('blog.show');
});

/*Route::middleware(['auth'])->name('dashboard')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/categories', function () {
        return '123';
    });
});*/

/*Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');*/
