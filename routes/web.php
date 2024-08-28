<?php

use App\Http\Controllers\Email;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/BlogGithub', function () {
    return view('BlogGithub');
});

Route::get('/LearnHtml', function () {
    return view('LearnHtml');
});

Route::get('/LearnPhp', function () {
    return view('LearnPhp');
});

Route::get('/LearnCss', function () {
    return view('LearnCss');
});

Route::get('/LiveServe', function () {
    return view('LiveServe');
});

Route::post('/contact/send', [Email::class, 'sendEmail'])->name('contact_send');
