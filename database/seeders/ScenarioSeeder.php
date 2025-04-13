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
        $scenario = Scenario::create([
            'title' => 'Ai primit salariul!',
            'description' => 'Este prima ta lună de muncă. Primești 3000 lei. Ce faci?'
        ]);

        $scenario->options()->createMany([
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
    }
}
