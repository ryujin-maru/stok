<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MediaController;

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

Route::as('stok.')->group(function() {
    Route::get('/', [IndexController::class,'home'])->name('index');
    Route::get('/company', [IndexController::class,'company'])->name('company');
    Route::get('/recruit', [IndexController::class,'recruit'])->name('recruit');
    Route::get('/products', [IndexController::class,'products'])->name('products');
    Route::get('/greet', [IndexController::class,'greet'])->name('greet');
    
    Route::get('/sitemap', [App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');
    
    // 問い合わせ関連
    Route::get('/contact',[MailController::class,'show'])->name('contact');
    Route::post('/contact/send',[MailController::class,'sendMail'])->name('send');
    
    // メディアページ関連
    Route::get('/media/',[MediaController::class,'index'])->name('interview');
    Route::get('/media/{id}',[MediaController::class,'detail'])->name('interview.page');
});


Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
