<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('game');
    }

    public function show($step)
    {
        if (!is_numeric($step)) {
            abort(404); // Protecție contra accesării cu text
        }

        if ((int)$step === 1) {
            session()->forget('answers'); // Resetăm sesiunea la început
        }

        $mockScenarios = [
            [
                'id' => 1,
                'text' => 'Ai 500 RON disponibili. Ce faci cu ei?',
                'options' => [
                    ['id' => 1, 'text' => 'Îi economisesc', 'score' => 10],
                    ['id' => 2, 'text' => 'Îi cheltui pe haine', 'score' => 2],
                    ['id' => 3, 'text' => 'Îi investesc în crypto', 'score' => 5],
                ]
            ],
            [
                'id' => 2,
                'text' => 'Primești un bonus lunar de 800 RON. Ce faci?',
                'options' => [
                    ['id' => 4, 'text' => 'Îl pun deoparte pentru concediu', 'score' => 8],
                    ['id' => 5, 'text' => 'Îl folosesc pentru o cină fancy', 'score' => 3],
                    ['id' => 6, 'text' => 'Îl donez', 'score' => 6],
                ]
            ]
        ];

        $index = (int)$step - 1;

        if (!isset($mockScenarios[$index])) {
            return redirect()->route('result');
        }

        $scenario = $mockScenarios[$index];

        return view('step', [
            'step' => $step,
            'scenario' => $scenario
        ]);
    }

    public function submit(Request $request, $step)
    {
        $mockScores = [
            1 => 10,
            2 => 2,
            3 => 5,
            4 => 8,
            5 => 3,
            6 => 6,
        ];

        $score = $mockScores[$request->option_id] ?? 0;

        session()->push('answers', [
            'scenario_id' => $request->scenario_id,
            'option_id' => $request->option_id,
            'score' => $score
        ]);

        $nextStep = (int)$step + 1;

        if ($nextStep > 2) {
            return redirect()->route('game.result');
        }

        return redirect()->route('game.step', $nextStep);
    }

    public function result()
    {
        $answers = session('answers', []);
        $totalScore = array_sum(array_column($answers, 'score'));

        $feedback = match (true) {
            $totalScore >= 15 => 'Excelent! Ești un adevărat econom!',
            $totalScore >= 8 => 'Bine! Mai e loc de îmbunătățire.',
            default => 'Ai luat câteva decizii riscante. Mai gândește-te :)',
        };

        return view('result', compact('answers', 'totalScore', 'feedback'));
    }
}
