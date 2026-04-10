<?php

namespace Database\Seeders;

use App\Models\Market;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Market::insert([
            ['name' => 'Serrekunda Market', 'region' => 'West Coast Region', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brikama Market',    'region' => 'West Coast Region', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Farafenni Market',  'region' => 'North Bank Region', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Basse Market',      'region' => 'Upper River Region','created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
