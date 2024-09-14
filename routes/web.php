<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', \App\Livewire\Home::class)->name('dashboard');

    Route::get('/activity', \App\Livewire\Activity\Index::class)->name('activity.index');
});
