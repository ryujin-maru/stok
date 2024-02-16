<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class,'home'])->name('stok.index');
Route::get('/company', [IndexController::class,'company'])->name('stok.company');
Route::get('/recruit', [IndexController::class,'recruit'])->name('stok.recruit');
Route::get('/products', [IndexController::class,'products'])->name('stok.products');
Route::get('/greet', [IndexController::class,'greet'])->name('stok.greet');

Route::get('/sitemap', [App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');

// Route::get('/company', function () {
//     return view('stok.company');
// })->name('stok.company');
// Route::get('/recruit',function() {
//     return view('stok.recruit');
// })->name('stok.recruit');
// Route::get('/products',function() {
//     return view('stok.products');
// })->name('stok.products');
Route::get('/contact',[MailController::class,'show'])->name('stok.contact');
Route::post('/contact/send',[MailController::class,'sendMail'])->name('stok.send');