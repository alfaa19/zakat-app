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
    return view('login');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/muzaki', [App\Http\Controllers\DashboardController::class, 'muzakkiRead'])->middleware('auth')->name('muzakkiRead');
Route::post('/dashboard/muzaki', [App\Http\Controllers\DashboardController::class, 'muzakkiPost'])->middleware('auth')->name('muzakkiPost');
Route::delete('/dashboard/muzaki/{id}', [App\Http\Controllers\DashboardController::class, 'muzakiDestroy'])->middleware('auth')->name('muzakiDestroy');
Route::get('/dashboard/muzaki/{id}', [App\Http\Controllers\DashboardController::class, 'muzakiEdit'])->middleware('auth')->name('muzakiEdit');
Route::put('/dashboard/muzaki/{id}', [App\Http\Controllers\DashboardController::class, 'muzakiUpdate'])->middleware('auth')->name('muzakiUpdate');
Route::get('/dashboard/mustahik', [App\Http\Controllers\DashboardController::class, 'mustahikRead'])->middleware('auth')->name('mustahikRead');
Route::post('/dashboard/mustahik', [App\Http\Controllers\DashboardController::class, 'mustahikPost'])->middleware('auth')->name('mustahikPost');
Route::delete('/dashboard/mustahik/{id}', [App\Http\Controllers\DashboardController::class, 'mustahikDestroy'])->middleware('auth')->name('mustahikDestroy');
Route::get('/dashboard/mustahik/{id}', [App\Http\Controllers\DashboardController::class, 'mustahikEdit'])->middleware('auth')->name('mustahikEdit');
Route::put('/dashboard/mustahik/{id}', [App\Http\Controllers\DashboardController::class, 'mustahikUpdate'])->middleware('auth')->name('mustahikUpdate');
Route::get('/dashboard/bayarzakat',[App\Http\Controllers\DashboardController::class, 'bayarzakatRead'])->middleware('auth')->name('bayarzakatRead');
Route::get('/dashboard/muzaki/bayar/{id}',[App\Http\Controllers\DashboardController::class, 'bayar'])->middleware('auth')->name('bayar');
Route::post('dashboard/zakat', [App\Http\Controllers\DashboardController::class, 'sumbitBayar'])->middleware('auth')->name('submitBayar');
Route::delete('dashboard/bayarzakat/{id}', [App\Http\Controllers\DashboardController::class, 'deleteBayar'])->middleware('auth')->name('deleteBayar');
Route::get('dashboard/bayarzakat/{id}', [App\Http\Controllers\DashboardController::class, 'editBayar'])->middleware('auth')->name('editBayar');
Route::put('dashboard/bayarzakat/{id}', [App\Http\Controllers\DashboardController::class, 'updateBayar'])->middleware('auth')->name('updateBayar');
Route::get('dashboard/warga', [App\Http\Controllers\DashboardController::class, 'wargaRead'])->middleware('auth')->name('wargaRead');
Route::post('dashboard/warga', [App\Http\Controllers\DashboardController::class, 'wargaAdd'])->middleware('auth')->name('wargaAdd');
Route::delete('dashboard/warga/{id}', [App\Http\Controllers\DashboardController::class, 'wargaDelete'])->middleware('auth')->name('wargaDelete');
Route::get('dashboard/warga/{id}', [App\Http\Controllers\DashboardController::class, 'wargaEdit'])->middleware('auth')->name('wargaEdit');
Route::put('dashboard/warga/{id}', [App\Http\Controllers\DashboardController::class, 'wargaUpdate'])->middleware('auth')->name('wargaUpdate');
Route::get('dashboard/lainnya', [App\Http\Controllers\DashboardController::class, 'lainnyaRead'])->middleware('auth')->name('lainnyaRead');
Route::post('dashboard/lainnya', [App\Http\Controllers\DashboardController::class, 'lainnyaAdd'])->middleware('auth')->name('lainnyaAdd');
Route::delete('dashboard/lainnya/{id}', [App\Http\Controllers\DashboardController::class, 'lainnyaDelete'])->middleware('auth')->name('lainnyaDelete');
Route::get('dashboard/lainnya/{id}', [App\Http\Controllers\DashboardController::class, 'lainnyaEdit'])->middleware('auth')->name('lainnyaEdit');
Route::put('dashboard/lainnya/{id}', [App\Http\Controllers\DashboardController::class, 'lainnyaUpdate'])->middleware('auth')->name('lainnyaUpdate');
Route::get('dashboard/laporanZakat',[App\Http\Controllers\DashboardController::class, 'laporanZakat'])->middleware('auth')->name('laporanZakat');
Route::get('dashboard/laporanWarga',[App\Http\Controllers\DashboardController::class, 'laporanWarga'])->middleware('auth')->name('laporanWarga');
Route::get('dashboard/laporanMustahik',[App\Http\Controllers\DashboardController::class, 'laporanMustahikl'])->middleware('auth')->name('laporanMustahikl');
Route::get('dashboard/laporanZakat/pdf',[App\Http\Controllers\DashboardController::class, 'laporanZakatpdf'])->middleware('auth')->name('laporanZakatpdf');
Route::get('dashboard/laporanWarga/pdf',[App\Http\Controllers\DashboardController::class, 'laporanWargapdf'])->middleware('auth')->name('laporanWargapdf');
Route::get('dashboard/laporanMustahik/pdf',[App\Http\Controllers\DashboardController::class, 'laporanMustahiklpdf'])->middleware('auth')->name('laporanMustahiklpdf');
