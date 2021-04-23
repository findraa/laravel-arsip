<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\IncomingMailController;
use App\Http\Controllers\OutgoingMailController;
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
    return view('auth.login');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');

    Route::get('/surat-masuk', [ IncomingMailController::class, "index_view" ])->name('surat-masuk');
    Route::view('/surat-masuk/new', "pages.incoming-mail.incoming-mail-new")->name('surat-masuk.new');
    Route::view('/surat-masuk/edit/{incomingMailId}', "pages.incoming-mail.incoming-mail-edit")->name('surat-masuk.edit');
     Route::get('/surat-masuk/print/{id}', [ IncomingMailController::class, "print" ])->name('surat-masuk.print');

    Route::get('/surat-keluar', [ OutgoingMailController::class, "index_view" ])->name('surat-keluar');
    Route::view('/surat-keluar/new', "pages.outgoing-mail.outgoing-mail-new")->name('surat-keluar.new');
    Route::view('/surat-keluar/edit/{outgoingMailId}', "pages.outgoing-mail.outgoing-mail-edit")->name('surat-keluar.edit');
    Route::get('/surat-keluar/print/{id}', [ OutgoingMailController::class, "print" ])->name('surat-keluar.print');
});
