<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scenario;
use App\Models\Option;

class ScenarioSeeder extends Seeder
{
    public function run(): void
    {
        // SCENARIUL 1
        $s1 = Scenario::create([
            'title' => 'Ai primit salariul!',
            'description' => 'Este prima ta lună de muncă. Primești 3000 lei. Ce faci?'
        ]);

        $s1->options()->createMany([
            [
                'text' => 'Îți cumperi un telefon nou de 2500 lei.',
                'effect_money' => -2500,
                'effect_happiness' => 10,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Pui 1500 lei în economii și restul păstrezi.',
                'effect_money' => -1500,
                'effect_happiness' => 5,
                'effect_debt' => 0,
                'effect_savings' => 1500,
            ],
            [
                'text' => 'Cheltuiești tot pe petreceri și haine.',
                'effect_money' => -3000,
                'effect_happiness' => 15,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
        ]);

        // SCENARIUL 2
        $s2 = Scenario::create([
            'title' => 'Primești un bonus de 800 lei.',
            'description' => 'Angajatorul îți oferă un bonus neașteptat. Cum îl folosești?'
        ]);

        $s2->options()->createMany([
            [
                'text' => 'Îl pui deoparte pentru concediu.',
                'effect_money' => -800,
                'effect_happiness' => 6,
                'effect_debt' => 0,
                'effect_savings' => 800,
            ],
            [
                'text' => 'Îl folosești pentru o cină fancy.',
                'effect_money' => -800,
                'effect_happiness' => 8,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Îl donezi unei cauze caritabile.',
                'effect_money' => -800,
                'effect_happiness' => 10,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
        ]);

        // SCENARIUL 3
        $s3 = Scenario::create([
            'title' => 'Apare o urgență medicală de 1000 lei.',
            'description' => 'Un prieten are nevoie urgent de bani pentru tratament.'
        ]);

        $s3->options()->createMany([
            [
                'text' => 'Îl ajuți cu toți banii tăi disponibili.',
                'effect_money' => -1000,
                'effect_happiness' => 12,
                'effect_debt' => 0,
                'effect_savings' => -1000,
            ],
            [
                'text' => 'Îi dai jumătate și restul păstrezi.',
                'effect_money' => -500,
                'effect_happiness' => 8,
                'effect_debt' => 0,
                'effect_savings' => -500,
            ],
            [
                'text' => 'Îi împrumuți banii cu dobândă.',
                'effect_money' => -1000,
                'effect_happiness' => 3,
                'effect_debt' => 0,
                'effect_savings' => -1000,
            ],
        ]);
    }
}
