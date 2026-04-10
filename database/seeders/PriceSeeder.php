<?php

namespace Database\Seeders;

use App\Models\Price;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prices = [
            // Groundnut (crop_id: 1)
            ['crop_id' => 1, 'market_id' => 1, 'amount' => 45.00, 'recorded_at' => Carbon::now()->subWeeks(7)],
            ['crop_id' => 1, 'market_id' => 2, 'amount' => 43.00, 'recorded_at' => Carbon::now()->subWeeks(7)],
            ['crop_id' => 1, 'market_id' => 3, 'amount' => 46.00, 'recorded_at' => Carbon::now()->subWeeks(7)],
            ['crop_id' => 1, 'market_id' => 4, 'amount' => 44.00, 'recorded_at' => Carbon::now()->subWeeks(7)],

            ['crop_id' => 1, 'market_id' => 1, 'amount' => 47.00, 'recorded_at' => Carbon::now()->subWeeks(4)],
            ['crop_id' => 1, 'market_id' => 2, 'amount' => 45.00, 'recorded_at' => Carbon::now()->subWeeks(4)],
            ['crop_id' => 1, 'market_id' => 3, 'amount' => 48.00, 'recorded_at' => Carbon::now()->subWeeks(4)],
            ['crop_id' => 1, 'market_id' => 4, 'amount' => 46.00, 'recorded_at' => Carbon::now()->subWeeks(4)],

            ['crop_id' => 1, 'market_id' => 1, 'amount' => 50.00, 'recorded_at' => Carbon::now()->subWeeks(1)],
            ['crop_id' => 1, 'market_id' => 2, 'amount' => 48.00, 'recorded_at' => Carbon::now()->subWeeks(1)],
            ['crop_id' => 1, 'market_id' => 3, 'amount' => 51.00, 'recorded_at' => Carbon::now()->subWeeks(1)],
            ['crop_id' => 1, 'market_id' => 4, 'amount' => 49.00, 'recorded_at' => Carbon::now()->subWeeks(1)],

            // Millet (crop_id: 2)
            ['crop_id' => 2, 'market_id' => 1, 'amount' => 22.00, 'recorded_at' => Carbon::now()->subWeeks(6)],
            ['crop_id' => 2, 'market_id' => 2, 'amount' => 20.00, 'recorded_at' => Carbon::now()->subWeeks(6)],
            ['crop_id' => 2, 'market_id' => 3, 'amount' => 23.00, 'recorded_at' => Carbon::now()->subWeeks(6)],
            ['crop_id' => 2, 'market_id' => 4, 'amount' => 21.00, 'recorded_at' => Carbon::now()->subWeeks(6)],

            ['crop_id' => 2, 'market_id' => 1, 'amount' => 24.00, 'recorded_at' => Carbon::now()->subWeeks(3)],
            ['crop_id' => 2, 'market_id' => 2, 'amount' => 22.00, 'recorded_at' => Carbon::now()->subWeeks(3)],
            ['crop_id' => 2, 'market_id' => 3, 'amount' => 25.00, 'recorded_at' => Carbon::now()->subWeeks(3)],
            ['crop_id' => 2, 'market_id' => 4, 'amount' => 23.00, 'recorded_at' => Carbon::now()->subWeeks(3)],

            // Maize (crop_id: 3)
            ['crop_id' => 3, 'market_id' => 1, 'amount' => 18.00, 'recorded_at' => Carbon::now()->subWeeks(5)],
            ['crop_id' => 3, 'market_id' => 2, 'amount' => 17.00, 'recorded_at' => Carbon::now()->subWeeks(5)],
            ['crop_id' => 3, 'market_id' => 3, 'amount' => 19.00, 'recorded_at' => Carbon::now()->subWeeks(5)],
            ['crop_id' => 3, 'market_id' => 4, 'amount' => 18.50, 'recorded_at' => Carbon::now()->subWeeks(5)],

            ['crop_id' => 3, 'market_id' => 1, 'amount' => 20.00, 'recorded_at' => Carbon::now()->subWeeks(2)],
            ['crop_id' => 3, 'market_id' => 2, 'amount' => 19.00, 'recorded_at' => Carbon::now()->subWeeks(2)],
            ['crop_id' => 3, 'market_id' => 3, 'amount' => 21.00, 'recorded_at' => Carbon::now()->subWeeks(2)],
            ['crop_id' => 3, 'market_id' => 4, 'amount' => 20.50, 'recorded_at' => Carbon::now()->subWeeks(2)],

            // Rice (crop_id: 4)
            ['crop_id' => 4, 'market_id' => 1, 'amount' => 35.00, 'recorded_at' => Carbon::now()->subWeeks(6)],
            ['crop_id' => 4, 'market_id' => 2, 'amount' => 34.00, 'recorded_at' => Carbon::now()->subWeeks(6)],
            ['crop_id' => 4, 'market_id' => 3, 'amount' => 36.00, 'recorded_at' => Carbon::now()->subWeeks(6)],
            ['crop_id' => 4, 'market_id' => 4, 'amount' => 35.50, 'recorded_at' => Carbon::now()->subWeeks(6)],

            ['crop_id' => 4, 'market_id' => 1, 'amount' => 37.00, 'recorded_at' => Carbon::now()->subWeeks(2)],
            ['crop_id' => 4, 'market_id' => 2, 'amount' => 36.00, 'recorded_at' => Carbon::now()->subWeeks(2)],
            ['crop_id' => 4, 'market_id' => 3, 'amount' => 38.00, 'recorded_at' => Carbon::now()->subWeeks(2)],
            ['crop_id' => 4, 'market_id' => 4, 'amount' => 37.50, 'recorded_at' => Carbon::now()->subWeeks(2)],

            // Onion (crop_id: 5)
            ['crop_id' => 5, 'market_id' => 1, 'amount' => 28.00, 'recorded_at' => Carbon::now()->subWeeks(5)],
            ['crop_id' => 5, 'market_id' => 2, 'amount' => 27.00, 'recorded_at' => Carbon::now()->subWeeks(5)],
            ['crop_id' => 5, 'market_id' => 3, 'amount' => 29.00, 'recorded_at' => Carbon::now()->subWeeks(5)],
            ['crop_id' => 5, 'market_id' => 4, 'amount' => 28.50, 'recorded_at' => Carbon::now()->subWeeks(5)],

            ['crop_id' => 5, 'market_id' => 1, 'amount' => 30.00, 'recorded_at' => Carbon::now()->subWeeks(1)],
            ['crop_id' => 5, 'market_id' => 2, 'amount' => 29.00, 'recorded_at' => Carbon::now()->subWeeks(1)],
            ['crop_id' => 5, 'market_id' => 3, 'amount' => 31.00, 'recorded_at' => Carbon::now()->subWeeks(1)],
            ['crop_id' => 5, 'market_id' => 4, 'amount' => 30.50, 'recorded_at' => Carbon::now()->subWeeks(1)],
        ];

        Price::insert($prices);
    }
}
