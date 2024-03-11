<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculate_controller;
use App\users;

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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('index/{id}', [calculate_controller::class, 'index'])->name('index');
route::post('index', [calculate_controller::class, 'calculate'])->name('cal');
route::get('/', [calculate_controller::class, 'signup']);
route::post('/', [calculate_controller::class, 'store'])->name('store');
route::get('/login', [calculate_controller::class, 'login'])->name('login');

route::post('/login', [calculate_controller::class, 'logincheck'])->name('logincheck');

Route::group(['middleware' =>['web', 'checkuser']], function(){
    route::get('/dashboard/{id}', [calculate_controller::class, 'dashboard'])->name('dashboard');
    route::get('/customers/{id}', [calculate_controller::class, 'customers'])->name('customers');
});
route::get('/logout', [calculate_controller::class, 'logout'])->name('logout');


route::post('/send_money/{id}', [calculate_controller::class, 'sendmoney'])->name('sendmoney');
route::post('/sendmoney/{id}/{amount}', [calculate_controller::class, 'amount_store'])->name('storeamount');

// route::post('/send_money/{sender_money}', [calculate_controller::class, 'amount_store'])->name('storeamount');

route::get('/bendetail/{id}', [calculate_controller::class, 'bendetail'])->name('bendetail');

route::post('/bendetail', [BeneficiaryController::class, 'benstore'])->name('benstore');
Route::get('delete/{user_id}', [calculate_controller::class,'delete'])->name('delete');
