<?php

use App\Http\Controllers\admin\AvisTextController;
use App\Http\Controllers\admin\AvisVdController;
use App\Http\Controllers\admin\BrandsController;
use App\Http\Controllers\admin\ImgSlideController;
use App\Http\Controllers\admin\ModelsController;
use App\Http\Controllers\admin\RepriseVenteController;
use App\Http\Controllers\admin\VideoAdsController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\VilleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::resource('/', FrontController::class);
Route::resource('/Vendre', SellController::class);
Route::resource('/Acheter', BuyController::class);
Route::resource('/Contactez-nous', ContactController::class);
Route::resource('/Services', ServicesController::class);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/brands', BrandsController::class);
    Route::resource('/admin/models', ModelsController::class);
    Route::resource('/admin/avistext', AvisTextController::class);
    Route::resource('/admin/avisvideos', AvisVdController::class);
    Route::resource('/admin/imgslider', ImgSlideController::class);
    Route::resource('/admin/demande', RepriseVenteController::class);
    Route::resource('/admin/videoads', VideoAdsController::class);
    Route::resource('/admin/ville', VilleController::class);
});

require __DIR__.'/auth.php';
