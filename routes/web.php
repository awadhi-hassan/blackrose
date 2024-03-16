<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;

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

Route::controller(RoutesController::class)->group(function(){
    $routes = [
        'dashboard',
        'services',
        'about',
        'contact'
    ];

    foreach ($routes as $route) {
        Route::get($route, $route)->name($route);
    }

    Route::middleware([
        config('jetstream.auth_session'),
    ])->get('/', 'dashboard')->name('dashboard');

});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
