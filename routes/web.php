<?php

use App\Http\Livewire\AskForm;
use App\Http\Livewire\Homepage;
use App\Http\Livewire\ValidateOffer;
use App\Http\Livewire\VerifyEmail;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;



Route::get('/', Homepage::class)->name('homepage');
Route::get('/form', AskForm::class)->name('askForm');
Route::get('/verify', VerifyEmail::class)->name('verifyEmail');


Route::get('/validate', ValidateOffer::class)->name('validateOffer');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
