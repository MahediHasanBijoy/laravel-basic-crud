<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Requests\RegistrationRequest;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/register', function(RegistrationRequest $request){
    // process $request
    return "registration done.";
});

Route::get('/home', function(){
    return redirect('/dashboard', 302);
});


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function(){
        return 'profile view';
    });
    Route::get('/settings', function(){
        return 'settings view';
    });
});


// Product Resource Routes
Route::controller(ProductController::class)->group(function(){
    Route::get('/products', 'index')->name('products.index');
    Route::get('/products/create', 'create')->name('products.create');
    Route::post('/products', 'store')->name('products.store');
    Route::get('/produts/{id}/edit', 'edit')->name('products.edit');
    Route::put('/products/{id}', 'update')->name('products.update');
    Route::delete('/products/{id}', 'destroy')->name('products.destroy');
});

// single action controller route
Route::post('/contact', ContactController::class);


// Resource controller PostController routes
Route::resource('/posts', PostController::class);