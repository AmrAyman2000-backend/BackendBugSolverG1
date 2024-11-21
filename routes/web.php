<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/posts',[HomeController::class,'posts'])->name('postPage');
Route::post('/create-post',[HomeController::class,'create'])->name('createPost');
Route::get('/edit-post/{id}',[HomeController::class,'edit'])->name('edit');
Route::put('/edit-post/{id}',[HomeController::class,'update'])->name('update');
Route::delete('/delete-post/{id}',[HomeController::class,'delete'])->name('delete');


