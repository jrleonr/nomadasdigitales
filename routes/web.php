<?php

use App\Http\Livewire\AskForm;
use App\Http\Livewire\AskFormEdit;
use App\Http\Livewire\Homepage;
use App\Http\Livewire\OfferValidated;
use App\Http\Livewire\ShowOffer;
use App\Http\Livewire\VerifyOfferByEmail;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;



Route::get('/', Homepage::class)->name('homepage');
Route::get('/publica', AskForm::class)->name('ask-form');
Route::get('/oferta/{offer}/editar', AskFormEdit::class)->name('ask-form-edit');
Route::get('/oferta/{offer}', ShowOffer::class)->name('show-offer');
Route::get('/verifica-tu-oferta', VerifyOfferByEmail::class)->name('validate-offer');
Route::get('/oferta-validada/{offer}', OfferValidated::class)->name('offer-validated');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
