<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/shortlink', function () {
//    return view('shortlink::shortlink');
//})->name('shortlink');

//Route::post('/shortlink', function (Request $request) {
//    return $request->all();
//})->name('short.link.post');

Route::get('/shortlink', [\Vafancy\ShortLink\Http\Controllers\ShortLinkController::class, 'index'])->name('shortlink');
Route::post('/shortlink', [\Vafancy\ShortLink\Http\Controllers\ShortLinkController::class, 'store'])->name('short.link.post');
Route::get('{code}',[\Vafancy\ShortLink\Http\Controllers\ShortLinkController::class,'shortenLink'])->name('shorten.link');
