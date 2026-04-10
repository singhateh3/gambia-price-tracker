<?php

namespace Database\Seeders;

use App\Models\Crop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Crop::insert([
            ['name' => 'Groundnut', 'unit' => 'per kg',  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Millet',    'unit' => 'per kg',  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Maize',     'unit' => 'per kg',  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rice',      'unit' => 'per kg',  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Onion',     'unit' => 'per kg',  'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
