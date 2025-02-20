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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/hsf', function () {
        return view('pages.hsf');
    })->name('hsf');
    Route::get('/lob', function () {
        return view('pages.lob');
    })->name('lob');
    Route::get('/lopss', function () {
        return view('pages.lopss');
    })->name('lopss');
    Route::get('/bahay', function () {
        return view('pages.bahay');
    })->name('bahay');
    Route::get('/est', function () {
        return view('pages.establishment');
    })->name('est');
    Route::get('/livelihood', function () {
        return view('pages.livelihood');
    })->name('livelihood');
    Route::get('/lot', function () {
        return view('pages.lot');
    })->name('lot');
    Route::get('/paninirahan', function () {
        return view('pages.paninirahan');
    })->name('paninirahan');
    Route::get('/religion', function () {
        return view('pages.religion');
    })->name('religion');
    Route::get('/type-of-house', function () {
        return view('pages.uringbahay');
    })->name('type-of-house');
    Route::get('/type-of-house', function () {
        return view('pages.uringbahay');
    })->name('type-of-house');
    Route::get('/refilling-station', function () {
        return view('pages.refilling-station');
    })->name('refilling-station');
    Route::get('/hsr', function () {
        return view('pages.hsr');
    })->name('hsr');
});
