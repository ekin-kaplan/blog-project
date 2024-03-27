<?php

use App\Http\Controllers\Back\BlogsBController;
use App\Http\Controllers\Front\BlogsFController;
use Illuminate\Support\Facades\Route;


Route::get('/' , function (){
    return view('front.index');
})->name('front.index');

Route::get('/blogs' , [BlogsFController::class, 'index'])->name('front.blogs.index');
Route::post('/create-blogs', [BlogsBController::class, 'create'])->name('create.blogs');
Route::get('/blogs/show/{id}' , [BlogsFController::class, 'show'])->name('front.blogs.show');
