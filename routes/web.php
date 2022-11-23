<?php

use App\Http\Livewire\AskForm;
use App\Http\Livewire\Homepage;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;



Route::get('/', Homepage::class)->name('homepage');
Route::get('/form', AskForm::class)->name('askForm');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
