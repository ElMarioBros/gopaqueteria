<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TicketsController;


//LOGIN
Route::get('/', fn()=> redirect()->route('register-ticket-view'));

Route::get('/login', fn()=> view('login.login'))->name('login')->middleware('guest');
Route::post('/login', [UsersController::class,'login'])->name('login-attempt');
Route::post('/logout', [UsersController::class,'logout'])->name('logout');
//FIN LOGIN

//REGISTER PACKAGE
Route::get('/register', fn() => view('form'))->name('register-ticket-view')->middleware('auth');
Route::post('/register', [TicketsController::class,'store'])->name('register-ticket')->middleware('auth');
//FIN REGISTER PACKAGE

//SEARCH
Route::get('/ticket/{id}', [TicketsController::class,'view'])->name('ticket-view');
Route::post('/ticket', [TicketsController::class,'find'])->name('ticket-find');

Route::get('/search', fn() => view('search'))->name('search');
//FIN SEARCH

//ADMIN 
Route::get('/admin', [TicketsController::class,'index'])->name('admin-tickets')->middleware('is_admin');
Route::get('/admin-users', [UsersController::class,'index'])->name('admin-users')->middleware('is_admin');

Route::get('/add-user', fn()=> view('admin.add-user'))->name('add-user-view')->middleware('is_admin');
Route::post('/add-user',[UsersController::class,'store'])->name('add-user')->middleware('is_admin');
//FIN ADMIN
Route::get('/view-tick', fn() => view('ticket'))->name('view-tick');
