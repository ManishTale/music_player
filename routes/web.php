<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\userResourceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdvertisementsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\AniverseryController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CurrentsongController;
use App\Http\Controllers\MusiccategoriesController;
use App\Http\Controllers\MusicdirectorController;
use App\Http\Controllers\OldsongController;
use App\Http\Controllers\RecentsongController;
use App\Http\Controllers\DemotionsongController;
use App\Http\Controllers\FrontController;
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
Route::get('/login', function () {
    return view('admin.login');
});
// // Route::get('/login', [AdminController::class, 'index'])->name('blogs.index');

// Route::get('/admin', [AdminController::class, 'adminlogin'])->name('login.post');
Route::post('logout',function(){ session()->flush(); return redirect('/'); })->name('logout');

Route::resource('dashboard', DashboardController::class);
Route::resource('users', userResourceController::class);
Route::resource('products', ProductController::class);
Route::resource('advertisement', AdvertisementsController::class);
Route::resource('birthdays', BirthdayController::class);
Route::resource('aniverserys', AniverseryController::class);
Route::resource('greetings', GreetingController::class);
Route::resource('currentsongs', CurrentsongController::class);
Route::resource('musiccategories', MusiccategoriesController::class);
Route::resource('musicdirectors', MusicdirectorController::class);
Route::resource('oldsongs', OldsongController::class);
Route::resource('recentsongs', RecentsongController::class);
Route::resource('demotionsongs', DemotionsongController::class);
// frontend
Route::get('/', [FrontController::class, 'index']);
Route::GET('/artist', [FrontController::class, 'artist']);
Route::GET('/album', [FrontController::class, 'album']);



















