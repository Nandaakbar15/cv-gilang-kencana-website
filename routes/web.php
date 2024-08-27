<?php

use Illuminate\Support\Facades\Route;


// default routes
Route::get('/', function () {
    return redirect()->route("login");
});

// routes login
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login'); // view login
Route::post('/login', 'App\Http\Controllers\LoginController@login'); // validasi login
Route::get('/logout', 'App\Http\Controllers\LoginController@logout'); // logout

// routes register
Route::get('/register', 'App\Http\Controllers\RegisterController@index'); // view register
Route::post('/register', 'App\Http\Controllers\RegisterController@register'); // cek register

// routes admin
Route::middleware(['web', 'auth', 'checkRole:admin'])->group(function () {
    Route::get("/admin/home", "App\Http\Controllers\AdminController@index");
});

// routes user
Route::prefix('user')->group(function() {

});
