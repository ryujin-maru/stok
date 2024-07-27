<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class,'home'])->name('stok.index');
Route::get('/company', [IndexController::class,'company'])->name('stok.company');
Route::get('/recruit', [IndexController::class,'recruit'])->name('stok.recruit');
Route::get('/products', [IndexController::class,'products'])->name('stok.products');
Route::get('/greet', [IndexController::class,'greet'])->name('stok.greet');

Route::get('/sitemap', [App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');

Route::get('/contact',[MailController::class,'show'])->name('stok.contact');
Route::post('/contact/send',[MailController::class,'sendMail'])->name('stok.send');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
