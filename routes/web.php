<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FacebookLoginController;
use App\Http\Controllers\HomepageafterloginController;
use App\Http\Controllers\MyorderController;
use App\Http\Controllers\MyaccountController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\NothingController;
use App\Http\Controllers\UidLoginController;
use App\Http\Controllers\PaymentController;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('store');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/registration', [RegisterController::class, 'registration'])->name('registration');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/homepageafterlogin', [HomepageafterloginController::class, 'homepageafterlogin'])->name('homepageafterlogin');

Route::get('/myorder', [MyorderController::class, 'myorder'])->name('myorder');
Route::post('/myorder', [MyorderController::class, 'myorders'])->name('myorders');

Route::get('/myaccount', [MyaccountController::class, 'myaccount'])->name('myaccount');

Route::get('/item/{id}', [ItemController::class, 'index'])->name('index');

Route::get('/facebooklogins/{id}', [FacebookLoginController::class, 'indexs'])->name('indexs');
Route::get('/loadcourses', [FacebookLoginController::class, 'loadcategory'])->name('loadcategory');


Route::get('/uidlogin/{id}', [UidLoginController::class, 'uidindex'])->name('uidindex');
Route::get('/nothing/{id}', [NothingController::class, 'nothingindex'])->name(' nothingindex');



Route::get('/afterfacebooklogin/{id}', [FacebookLoginController::class, 'afterfacebooklogin'])->name('afterfacebooklogin');

Route::get('/afteruidlogin/{id}', [UidLoginController::class, 'afteruidlogin'])->name('afteruidlogin');
Route::get('/afternothinglogin/{id}', [NothingController::class, 'afternothinglogin'])->name('afternothinglogin');



Route::post('/payment', [PaymentController::class, 'payment'])->name('payment');
Route::post('/facebooklogindata', [FacebookLoginController::class, 'formsdata'])->name('formsdata');
Route::post('/fblogin', [FacebookLoginController::class, 'redirectpage'])->name('redirectpage');
Route::post('/idlogin', [UidLoginController::class, 'redirectpages'])->name('redirectpages');
Route::post('/uidlogindata', [UidLoginController::class, 'uidformsdata'])->name('uidformsdata');
Route::post('/nothinglogindata', [NothingController::class, 'nothingformsdata'])->name('nothingformsdata');
Route::post('/nodata', [NothingController::class, 'nodataredirectpage'])->name('nodataredirectpage');
// Route::post('/cart', [CartController::class, 'cart'])->name('cart');