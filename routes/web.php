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
    Route::get("/admin/datauser", "App\Http\Controllers\UserController@index");
    Route::delete("/admin/hapusdatauser/{user}", "App\Http\Controllers\UserController@deleteUser");
    Route::get("/admin/daftarkontraktor", "App\Http\Controllers\KontraktorController@index");
    Route::get("/admin/viewtambahkontraktor", "App\Http\Controllers\KontraktorController@create");
});

// routes user
Route::prefix('user')->group(function() {

});
