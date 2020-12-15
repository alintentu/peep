<?php

use Illuminate\Support\Facades\Route;

use App\Models\Tweet;
use App\Models\User;

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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    // Route::get('/tweets', [TweetsController::class, 'index']);
    Route::get('/tweets', 'App\Http\Controllers\TweetsController@index')->name('home');
    Route::post('/tweets', 'App\Http\Controllers\TweetsController@store');
});

// Route::get('/tweets', 'App\Http\Controllers\TweetsController@index')->name('dashboard');
// Route::post('/tweets', 'App\Http\Controllers\TweetsController@store');

// Route::get('/dashboard', function () {
//     return view('dashboard', [
//         'tweets' => auth()->user()->timeline()
//     ]);
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

