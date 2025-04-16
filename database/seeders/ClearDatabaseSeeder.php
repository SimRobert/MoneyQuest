<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClearDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('options')->delete();
        DB::table('scenarios')->delete();
    }
}
