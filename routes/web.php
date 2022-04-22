<?php

use App\Http\Controllers\AssistController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/events', [EventController::class, 'index'])->name('events')->middleware('auth');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show')->middleware('auth');
Route::post('/events', [EventController::class, 'store'])->middleware('auth');
Route::delete('/events/{post}', [EventController::class, 'destory'])->name('events.destroy')->middleware('auth');


Route::post('/events/{event}/assist', [AssistController::class, 'store'])->name('events.assist');
Route::delete('/events/{event}/assist', [AssistController::class, 'destroy'])->name('events.assist');
