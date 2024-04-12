<?php

use App\Http\Controllers\Admin\AnnoncesController;
use App\Http\Controllers\Admin\AvisTextController;
use App\Http\Controllers\Admin\AvisVdController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\ImgSlideController;
use App\Http\Controllers\Admin\ModelsController;
use App\Http\Controllers\Admin\RepriseVenteController;
use App\Http\Controllers\Admin\VideoAdsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VilleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\FinancementController;
use App\Http\Controllers\RepriseController;
use App\Http\Controllers\VenteController;
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
Route::resource('/vendre', SellController::class);
Route::resource('/contactez-nous', ContactController::class);
Route::resource('/services', ServicesController::class);
Route::resource('/financement', FinancementController::class);
Route::resource('/reprise', RepriseController::class);
Route::resource('/vente', VenteController::class);
Route::resource('/achat', BuyController::class);
Route::post('/achat/{id}/getmodels', [ServicesController::class, 'getmodels'])->name('services.modeles');
Route::get('/achat/voiture/{marque}_{modele}_{id}.html', [BuyController::class, 'show'])->name('achat.detail');

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
    Route::resource('/admin/annonces', AnnoncesController::class);
    Route::post('/admin/models/{id}/getmodels', [ModelsController::class, 'getmodels'])->name('models.modeles');
    //delete media
    Route::post('/admin/annonces/{id}/deleteImage', [AnnoncesController::class, 'deleteImage'])->name('annonces.deleteImg');
});

require __DIR__.'/auth.php';
