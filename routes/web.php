<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use Illuminate\Http\Request;

Route::middleware(['auth'])->group(function () {
    // ... alte rute deja existente ...

    Route::post('/save-budget', function (Request $request) {
        $request->validate([
            'budget' => 'required|numeric|min:0',
        ]);

        session(['user_budget' => $request->budget]);

        return redirect()->back()->with('success', 'Bugetul a fost salvat!');
    })->name('save-budget');
});


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
