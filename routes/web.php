<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HalamanController;

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

Route::get('/admin', function () {
    return view('Admin.pages.dashboard.index');
})->middleware('auth');




Route::get('/', [HalamanController::class, 'index'])->name('article-index');
Route::get('/article', [HalamanController::class, 'article'])->name('article');
Route::get('/da/{url}', [HalamanController::class, 'detailarticle'])->name('da.article');


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'prosesLogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth'])->group(function(){
    Route::resource('admin/anggota', AnggotaController::class);
    Route::resource('admin/article', ArticleController::class);
    Route::match(['get', 'put'], '/profile', [AccountController::class, 'profile'])->name('profile');
    Route::match(['get', 'put'], '/settings', [AccountController::class, 'settings'])->name('settings');
    
    // Route::put('/profile/{id}', [AccountController::class, 'updateProfile'])->name('profile.update');
    Route::put('/setting', [AccountController::class, 'updateSetting'])->name('setting.update');
});

