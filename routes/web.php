<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TesApi;
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
// Jalanakan di hosting/vps
// Route::get('/migrate',function(){
// 	Artisan::call('migrate');
// 	return "berhasil migrate";
// });
// GUESTS

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/blog',[PageController::class,'blogHome'])->name('blog');
Route::match(array('GET','POST'),'/blog/artikel/{article:judul}',[PageController::class,'articleDetail'])->name('articleDetail');
Route::fallback(function(){
	return redirect()->route('home');
});
Route::post('/coment',[PageController::class,'comentStore'])->name('comentStore');
Route::get('/blog/cari',[PageController::class,'search'])->name('search');

// layanan
Route::get('/tentang',[PageController::class,'about'])->name('about');
Route::get('/team',[PageController::class,'authors'])->name('authors');
Route::get('/kontak',[PageController::class,'contact'])->name('contact');
Route::get('/kebijakan-privasi',[PageController::class,'privacyPolicy'])->name('privacyPolicy');
Route::get('/ketentuan-layanan',[PageController::class,'termsOfService'])->name('termsOfService');
Route::post('/sendMail',[PageController::class,'sendMail'])->name('sendMail');

// ADMIN

Route::get('/YWRtaW5rYWg/L1lXUnRhVzVyWVdn',[UserController::class,'login'])->name('login');
Route::post('/YWRtaW5rYWg/L1lXUnRhVzVyWVdn',[UserController::class,'checkLogin'])->name('checkLogin');
Route::get('/YWRtaW5rYWg/logout',[UserController::class,'logout'])->name('logout');

Route::get('/YWRtaW5rYWg',[PageController::class,'articlesHome'])->name('YWRtaW5rYWg.index');//index

Route::get('/YWRtaW5rYWg/create',[PageController::class,'articlesCreate'])->name('YWRtaW5rYWg.create');//create

Route::post('/YWRtaW5rYWg',[PageController::class,'articlesStore'])->name('YWRtaW5rYWg.store');//store

Route::get('/YWRtaW5rYWg/{article:slug}/edit', [PageController::class,'articlesEdit'])->name('YWRtaW5rYWg.edit');//get edit

Route::patch('/YWRtaW5rYWg/{article:slug}', [PageController::class,'articlesUpdate'])->name('YWRtaW5rYWg.update');//patch update

Route::delete('/YWRtaW5rYWg/{article:slug}', [PageController::class,'articlesDelete'])->name('YWRtaW5rYWg.destroy');//delete




Route::get('/ambil',[TesApi::class,'ambil']);