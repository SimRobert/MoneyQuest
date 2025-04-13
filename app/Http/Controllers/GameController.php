<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scenario;
use App\Models\Option;

class GameController extends Controller
{
    public function index()
    {
        return view('game');
    }

    public function show($step)
    {
        if (!is_numeric($step)) {
            abort(404);
        }

        $step = (int)$step;

        if ($step === 1) {
            session()->forget('answers');
            
            session()->put('stats', [
                'money' => 0,
                'happiness' => 0,
                'savings' => 0,
                'debt' => 0,
            ]);
        }        

        // Luăm toate scenariile cu opțiuni
        $scenarios = Scenario::with('options')->get();

        $index = $step - 1;

        if (!isset($scenarios[$index])) {
            return redirect()->route('game.result');
        }

        $scenario = $scenarios[$index];

        return view('step', [
            'step' => $step,
            'scenario' => $scenario
        ]);
    }

    public function submit(Request $request, $step)
    {
        $option = Option::find($request->option_id);

        // Update scoruri curente
        $stats = session('stats', [
            'money' => 0,
            'happiness' => 0,
            'savings' => 0,
            'debt' => 0,
        ]);

        $stats['money'] += $option->effect_money ?? 0;
        $stats['happiness'] += $option->effect_happiness ?? 0;
        $stats['savings'] += $option->effect_savings ?? 0;
        $stats['debt'] += $option->effect_debt ?? 0;

        session()->put('stats', $stats);

        if (!$option) {
            return redirect()->back()->withErrors(['option_id' => 'Opțiunea selectată nu există.']);
        }

        // Score-ul poate fi oricare din efectele dorite; aici luam doar effect_happiness pentru exemplu
        $score = $option->effect_happiness ?? 0;

        session()->push('answers', [
            'scenario_id' => $request->scenario_id,
            'option_id' => $request->option_id,
            'score' => $score
        ]);

        $nextStep = (int)$step + 1;

        $totalScenarios = Scenario::count();
        if ($nextStep > $totalScenarios) {
            return redirect()->route('result');
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
