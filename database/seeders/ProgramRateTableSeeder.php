<?php

namespace Database\Seeders;

use App\Models\ProgramRate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProgramRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rates = [
            [
                'id' => 1,
                'description' => '',
                'period' => 'Month 1',
                'total_amount' => 0.00,
                'payment_remarks' => '',
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 2,
                'description' => '',
                'period' => 'Month 1',
                'total_amount' => 0.00,
                'payment_remarks' => '',
                'program_id' => 2, // Masters
            ],
            [
                'id' => 3,
                'description' => '',
                'period' => 'Month 1',
                'total_amount' => 0.00,
                'payment_remarks' => '',
                'program_id' => 3, // Doctoral
            ],
        ];

        foreach ($rates as $rate) {
            $rateObject = ProgramRate::firstOrCreate(['id' => $rate['id']], $rate);
            if (!$rateObject->wasRecentlyCreated) {
                $rateObject->update(Arr::only($rate, ['description', 'period', 'total_amount', 'payment_remarks']));
            }
        }
    }
}
