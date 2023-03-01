
<?php

use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    echo "Selamat Datang di Tosa";
});

Route::prefix('/category')->group(function(){
    Route::get('/ayam',[TokoController::class,'ayam']);
    Route::get('/lele',[TokoController::class,'lele']);
    Route::get('/jamur',[TokoController::class,'jamur']);
});

Route::get('/news/{promo}',[TokoController::class,'promo']);

Route::prefix('/program')->group(function(){
    Route::get('/gajiPegawai',[TokoController::class,'gajiPegawai']);
    Route::get('/belanja',[TokoController::class,'belanja']);
    Route::get('/sewaParkir',[TokoController::class,'sewaParkir']);
});

Route::get('/about-us', function () {
    echo "Anda puas kami senang";
});