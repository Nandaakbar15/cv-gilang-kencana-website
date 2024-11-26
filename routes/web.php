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
Route::middleware(['web', 'auth', 'checkRole:admin'])->prefix('admin')->group(function () {
    Route::get("/home", "App\Http\Controllers\AdminController@index");
    Route::get("/datauser", "App\Http\Controllers\DataUserController@index");
    Route::delete("/hapusdatauser/{user}", "App\Http\Controllers\DataUserController@deleteUser");
    Route::get("/ubahkontraktor/{kontraktor}",  "App\Http\Controllers\KontraktorController@edit");
    Route::put("/ubahkontraktor/{kontraktor}", "App\Http\COntrollers\KontraktorController@update");
    Route::get("/daftarkontraktor", "App\Http\Controllers\KontraktorController@index");
    Route::get("/viewtambahkontraktor", "App\Http\Controllers\KontraktorController@create");
    Route::post("/tambahkontraktor", "App\Http\Controllers\KontraktorController@store");
    Route::delete("/hapusKontraktor/{kontraktor}", "App\Http\Controllers\KontraktorController@destroy");
    Route::get("/datacontact", "App\Http\Controllers\ContactController@index");
    Route::get("/viewtambahkontak", "App\Http\Controllers\ContactController@create");
    Route::post("/tambahkontak", "App\Http\Controllers\ContactController@store");
    Route::get("/ubahkontak/{contact}", "App\Http\Controllers\ContactController@edit");
    Route::put("/ubahkontak/{contact}", "App\Http\Controllers\ContactController@update");
});

// routes user
Route::prefix('user')->group(function() {
    Route::get("/dashboarduser", "App\Http\Controllers\UserController@index");
    Route::get("/about", "App\Http\Controllers\UserController@about");
    Route::get("/contact", "App\Http\Controllers\UserController@contact");
    Route::get("/listkontraktor", "App\Http\Controllers\UserController@listKontraktor");
    Route::get("/portofolio", "App\Http\Controllers\UserController@portofolio");
});
