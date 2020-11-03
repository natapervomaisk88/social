<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FriendController;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*
 *Autorization
 */
Route::get('/signup', [AuthController::class, 'getSignup'])->middleware('guest')->name('auth.signup');
Route::post('/signup', [AuthController::class, 'postSignup'])->middleware('guest');
Route::get('/signin', [AuthController::class, 'getSignin'])->middleware('guest')->name('auth.signin');
Route::post('/signin', [AuthController::class, 'postSignin'])->middleware('guest');
Route::get('/signout',[AuthController::class, 'getSignout'])->name('auth.signout');
/*
 * Поиск
 * */
Route::get('/search', [SearchController::class, 'getResults'])->name('search.results');
/*
 * Профили
 **/
Route::get('/user/{username}', [ProfileController::class, 'getProfile'])->name('profile.index');
Route::get('/profile/edit', [ProfileController::class, 'getEdit'])->middleware('auth')->name('profile.edit');
Route::post('/profile/edit', [ProfileController::class, 'postEdit'])->middleware('auth')->name('profile.edit');
Route::get('/friends', [FriendController::class, 'getIndex'])->middleware('auth')->name('friends.index');
