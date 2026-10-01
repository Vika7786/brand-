<?php
use App\Http\Controllers; 
use Illuminate\Support\Facades\Route;

Route::get('/',[Controllers\BaseController::class,'getIndex']);
Route::get('/review',[Controllers\ReviewController::class, 'getIndex']);
Route::post('/review',[Controllers\ReviewController::class, 'postIndex']);
Route::get('catalog',[Controllers\CatalogController::class, 'getIndex']);
Route::get('catalog/{url}',[Controllers\CatalogController::class, 'getOneByUrl']);
Route::get('/cookie/close',[Controllers\CookieController::class, 'getClose']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/dashboard', [Controllers\ProductController::class, 'getIndex'])->name('dashboard');
});
Route::middleware('auth')->group(function () {
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');  
    Route::post('/og', [Controllers\OpenGraphController::class,'postIndex'])->name('og');
});



require __DIR__.'/auth.php';
Route::get('{url}', [Controllers\BaseController::class,'getMaintext']);