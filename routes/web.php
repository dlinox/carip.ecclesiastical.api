<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get("login", [App\Http\Controllers\Auth\AuthController::class, "login"])->name("login")->middleware('guest');
Route::get("/", [App\Http\Controllers\Auth\AuthController::class, "login"])->name("login")->middleware('guest');


Route::name('auth.')->prefix('auth')->group(function () {
    Route::post('sign-in', [App\Http\Controllers\Auth\AuthController::class, "signIn"])->name('sign-in');
    Route::post('sign-out', [App\Http\Controllers\Auth\AuthController::class, "signOut"])->name('sign-out');
});


Route::middleware(['admin'])->name('a.')->prefix('a')->group(function () {
    Route::get('', function () {
        return Inertia::render("admin/index");
    });
    Route::resource('users', UserController::class);
    Route::patch('users/update-state/{id}', [UserController::class, 'updateState']);

    Route::resource('places', PlaceController::class);
    Route::patch('places/update-state/{id}', [PlaceController::class, 'updateState']);


    // Route::name('users.')->prefix('users')->group(function () {

        // Route::get('', [App\Http\Controllers\UserController::class, "index"])->name('index');
        // // Route::get('create', [App\Http\Controllers\Admin\UserController::class, "create"])->name('create');
        // Route::post('', [App\Http\Controllers\UserController::class, "store"])->name('store');
        // // Route::get('edit/{user}', [App\Http\Controllers\Admin\UserController::class, "edit"])->name('edit');
        // // Route::put('update/{user}', [App\Http\Controllers\Admin\UserController::class, "update"])->name('update');
        // Route::delete('destroy/{user}', [App\Http\Controllers\Admin\UserController::class, "destroy"])->name('destroy');
    // });

    // Route::name('places.')->prefix('places')->group(function () {
    //     Route::get('', [App\Http\Controllers\PlaceController::class, "index"])->name('index');
    //     // Route::get('create', [App\Http\Controllers\Admin\PlaceController::class, "create"])->name('create');
    //     Route::post('', [App\Http\Controllers\PlaceController::class, "store"])->name('store');
    //     // Route::get('edit/{place}', [App\Http\Controllers\Admin\PlaceController::class, "edit"])->name('edit');
    //     // Route::put('update/{place}', [App\Http\Controllers\Admin\PlaceController::class, "update"])->name('update');
    //     // Route::delete('destroy/{place}', [App\Http\Controllers\Admin\PlaceController::class, "destroy"])->name('destroy');
    // });
});

Route::middleware(['secretary'])->name('s.')->prefix('s')->group(function () {
    Route::get('', function () {
        return Inertia::render("secretary/index");
    });
});



Route::name('autocomplete.')->prefix('autocomplete')->group(function () {
    Route::get('ubigeos', [Controller::class, 'ubigeoAutocomplete'])->name('ubigeos');
    Route::get('places', [Controller::class, 'placeAutocomplete'])->name('places');
});

Route::name('api.')->prefix('api')->group(function () {
    Route::get('dni/{dni}', [Controller::class, 'apiDni'])->name('dni');
});