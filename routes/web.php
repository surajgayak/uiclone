<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FreefireuidController;
use App\Http\Controllers\CallofdutyController;
use App\Http\Controllers\NetflixController;
use App\Http\Controllers\PubgController;
use App\Http\Controllers\HomepageafterloginController;
use App\Http\Controllers\MyorderController;
use App\Http\Controllers\MyaccountController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('store');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/freefireuid', [FreefireuidController::class, 'freefireuid'])->name('freefireuid');
Route::get('/freefireuidafterlogin', [FreefireuidController::class, 'freefireuidafterlogin'])->name('freefireuidafterlogin');

Route::get('/callofduty', [CallofdutyController::class, 'callofduty'])->name('callofduty');
Route::get('/callofdutyafterlogin', [CallofdutyController::class, 'callofdutyafterlogin'])->name('callofdutyafterlogin');

Route::get('/pubg', [PubgController::class, 'pubg'])->name('pubg');
Route::get('/pubgafterlogin', [PubgController::class, 'pubgafterlogin'])->name('pubgafterlogin');

Route::get('/netflix', [NetflixController::class, 'netflix'])->name('netflix');
Route::get('/netflixafterlogin', [NetflixController::class, 'netflixafterlogin'])->name('netflixafterlogin');
Route::get('/homepageafterlogin', [HomepageafterloginController::class, 'homepageafterlogin'])->name('homepageafterlogin');

Route::get('/myorder', [MyorderController::class, 'myorder'])->name('myorder');
Route::get('/myaccount', [MyaccountController::class, 'myaccount'])->name('myaccount');

    // ->middleware(['auth', 'verified'])->name('dashboard');