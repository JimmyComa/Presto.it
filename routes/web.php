<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

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

// rotta di HOME LOGIN e REGISTER
Route::get('/', [PublicController::class,'home'])->name('home');


// rotta per la creazione di un annuncio
Route::get('/create', [AnnouncementController::class,'create'])->name('announcement.create');


// pagina dettaglio
Route::get('/announcement/{announcement}', [AnnouncementController::class,'show'])->name('announcement.show');


// pagina filtro categorie
Route::get('/category/{category}', [FilterController::class,'category'])->name('category.filter');


// rotta per tutti gli annunci
Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');


// rotta per filtro utenti
Route::get('/user/{user}', [FilterController::class,'user'])->name('user.filter');

// rotta per revisore
Route::get('revisor/home', [RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');


// rotta per accettare, rifutare e undo
Route::patch('/accetta/annuncio/{announcement}',[RevisorController::class,'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
Route::patch('/rifiuta/annuncio/{announcement}',[RevisorController::class,'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');
Route::patch('/annulla/annuncio/',[RevisorController::class,'undoLastAnnouncement'])->middleware('isRevisor')->name('revisor.undo_last_announcement');
Route::patch('/annulla/annuncio/{announcement}',[RevisorController::class,'undoAnnouncement'])->middleware('isRevisor')->name('revisor.undo_announcement');


// rotta per diventare revisore
Route::get('/lavoraConNoi',[RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/lavoraConNoi/{user}',[RevisorController::class,'makeRevisor'])->middleware('auth')->name('make.revisor');

// rotta per la view del lavora con noi
Route::get('/WorkWithUs', [RevisorController::class,'wwu'])->name('revisor.wwu');

// rotta per la ricerca annuncio
Route::get('/ricerca/annuncio',[PublicController::class, 'searchAnnouncements'])->name('announcements.search');

// rotta per le lingue
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('set_locale');