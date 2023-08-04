<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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
    return view('stok.index');
})->name('stok.index');

Route::get('/company', function () {
    return view('stok.company');
})->name('stok.company');
Route::get('/contact',[MailController::class,'show'])->name('stok.contact');
Route::post('/contact/send',[MailController::class,'sendMail'])->name('stok.send');