<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class GameResultChart extends ChartWidget
{
    protected static ?string $heading = 'Rezultatele tale';

    protected function getData(): array
    {
        $stats = session('stats', [
            'money' => 0,
            'happiness' => 0,
            'savings' => 0,
            'debt' => 0,
        ]);

        return [
            'datasets' => [
                [
                    'label' => 'Scoruri',
                    'data' => [
                        $stats['money'],
                        $stats['happiness'],
                        $stats['savings'],
                        $stats['debt'],
                    ],
                    'backgroundColor' => [
                        '#3b82f6',
                        '#10b981',
                        '#f59e0b',
                        '#ef4444'
                    ],
                    'borderRadius' => 8,
                ],
            ],
            'labels' => ['Bani', 'Fericire', 'Economii', 'Datorii'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut'; // sau 'pie', 'line', 'doughnut', 'bar', etc.
    }
}