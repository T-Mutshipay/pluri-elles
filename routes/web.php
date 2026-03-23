<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('pages.home'); })->name('home');
Route::get('/qui-sommes-nous', function () { return view('pages.about'); })->name('about');
Route::get('/nos-services', function () { return view('pages.services'); })->name('services');
Route::get('/actualites', function () { return view('pages.news'); })->name('news');
Route::get('/contact', function () { return view('pages.contact'); })->name('contact');