<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Blog\MainController;
use App\Http\Controllers\Blog\ShowController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Admin\Category\IndexController;
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
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
    });
});

require __DIR__.'/auth.php';

Route::get('/{slug}', 'SlugController@call');

Route::group(['namespace' => 'Category'], function () {
    Route::get('/{category}', 'SlugController@category')->name('category.index');
});

Route::group(['namespace' => 'Blog'], function () {
    Route::get('/', 'MainController')->name('blog.index');
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
