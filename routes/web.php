<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/seyam', function () {
    return "Seyam Khan";
});
Route::get('/seyamm', function () {
    return view('seyam', ['name' => 'Seyam Khan']);
});
Route::get('/dashboard', [FirstController::class, 'show']);
Route::get('/about', [FirstController::class, 'display']);
Route::get('/test/show', [FirstController::class, 'display'])->name('about.page');



?>