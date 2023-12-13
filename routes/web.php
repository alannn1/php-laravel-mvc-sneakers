<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/sepatu', function () {
    return view('sepatu.add',[
        'is_update' => 0,
        'optbrand' => [
            '' => '-Pilih Brand Sepatu-',
            'nike' => 'Nike',
            'vans' => 'Vans',
            'converse' => 'Converse',
            'adidas' => 'Adidas',
            'reebok' => 'Reebok'
        ],
        'optjenis' => [
            '' => '-Pilih Jenis Sepatu-', 
            'slip-on' => 'Slip-on Sneakers',
            'high-top basketball' => 'High-Top Basketball Sneakers',
            'authentic' => 'Authentic Sneakers',
            'canvas' => 'Canvas Sneakers',
            'leather' => 'Leather Sneakers',
            'athletic' => 'Athletic Sneakers'
        ],
    ]);
});
*/
use App\Http\Controllers\SepatuController;
Route::get('/sepatu', [SepatuController::class, 'index'])->middleware('auth');
Route::get('/sepatu/add', [SepatuController::class, 'add_new']);
Route::post('/sepatu/save', [SepatuController::class, 'save']);
Route::get('/sepatu/edit/{id}', [SepatuController::class, 'edit']);
Route::get('/sepatu/delete/{id}', [SepatuController::class, 'delete']);

/*
Route::get('/store', function () {
    return view('store.main');
});
*/
use App\Http\Controllers\StoreController;
Route::get('/store', [StoreController::class, 'index'])->middleware('auth');

/*
Route::get('/login', function (){
    return view('sepatu');
});
*/
Route::get('/login', [StoreController::class, 'login'])->name('login')->middleware('guest');

use App\Http\Controllers\LoginController;
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


