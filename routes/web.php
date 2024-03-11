<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculate_controller;

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
<<<<<<< HEAD
Route::group(['middleware' =>['web', 'checkuser']], function(){
    route::get('/dashboard/{id}', [calculate_controller::class, 'dashboard'])->name('dashboard');
});
route::get('/logout', [calculate_controller::class, 'logout'])->name('logout');

route::get('/send_money/{id}', [calculate_controller::class, 'sendmoney'])->name('sendmoney');

route::post('/send_money', [calculate_controller::class, 'amount_store'])->name('amount');

route::get('/bendetail', [calculate_controller::class, 'bendetail'])->name('bendetail');

route::post('/bendetail', [BeneficiaryController::class, 'benstore'])->name('benstore');

=======
//Route::group(['middleware' =>['web', 'checkuser']], function(){
    route::get('/dashboard/{id}', [calculate_controller::class, 'dashboard'])->name('dashboard');
//});
route::get('/logout', [calculate_controller::class, 'logout'])->name('logout');

>>>>>>> a7cb6910be5f53456e4911ca904e852d6abc7a53
