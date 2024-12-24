<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'home'])->name('home');

Route::get('/award', [BaseController::class, 'award'])->name('awards');

Route::get('/game', [BaseController::class, 'game'])->name('games');

Route::get('/game/{slug}', [BaseController::class, 'game_detail'])->name('game.detail');

Route::get('/teams', [BaseController::class, 'team'])->name('teams');