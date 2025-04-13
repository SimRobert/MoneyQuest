<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/game', [GameController::class, 'index'])->name('game.index');
    Route::get('/game/result', [GameController::class, 'result'])->name('game.result');
    Route::get('/game/{step}', [GameController::class, 'show'])->name('game.step');
    Route::post('/game/{step}', [GameController::class, 'submit'])->name('game.store');
});


Route::get('/clear-session', function () {
    session()->forget('answers');
    return redirect('/game/1');
});

require __DIR__.'/auth.php';
