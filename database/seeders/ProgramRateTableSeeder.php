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
                'description' => 'Admission Fee',
                'period' => 'Month 1',
                'total_amount' => 3000.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 2,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 1',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 3,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 2',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 4,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 3',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 5,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 4',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 6,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 5',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 7,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 6',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 8,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 7',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 9,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 8',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 10,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 9',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 11,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 10',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 12,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 11',
                'total_amount' => 6250.00,
                'program_id' => 1, // Baccalaureate
            ],
            [
                'id' => 13,
                'description' => 'Action Research',
                'period' => 'Month 12',
                'total_amount' => 7000.00,
                'program_id' => 1, // Baccalaureate
            ],

            [
                'id' => 14,
                'description' => 'Admission Fee',
                'period' => 'Month 1',
                'total_amount' => 4000.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 15,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 1',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 16,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 2',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 17,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 3',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 18,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 4',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 19,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 5',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 20,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 6',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 21,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 7',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 22,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 8',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 23,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 9',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 24,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 10',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 25,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 11',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 26,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 12',
                'total_amount' => 6833.00,
                'program_id' => 2, // Masters
            ],
            [
                'id' => 27,
                'description' => 'Policy Paper',
                'period' => 'Month 13',
                'total_amount' => 18000,
                'program_id' => 2, // Masters
            ],

            [
                'id' => 28,
                'description' => 'Admission Fee',
                'period' => 'Month 1',
                'total_amount' => 5000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 29,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 1',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 30,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 2',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 31,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 3',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 32,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 4',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 33,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 5',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 34,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 6',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 35,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 7',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 36,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 8',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 37,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 9',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 38,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 10',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 39,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 11',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 40,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 12',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 41,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 13',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 42,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 14',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 43,
                'description' => 'Training/Seminar Fee',
                'period' => 'Month 15',
                'total_amount' => 8000.00,
                'program_id' => 3, // Doctoral
            ],
            [
                'id' => 44,
                'description' => 'Dissertation Fee',
                'period' => 'Month 16',
                'total_amount' => 30000.00,
                'program_id' => 3, // Doctoral
            ],
        ];

        foreach ($rates as $rate) {
            $rateObject = ProgramRate::firstOrCreate(['id' => $rate['id']], $rate);
            if (!$rateObject->wasRecentlyCreated) {
                $rateObject->update(Arr::only($rate, ['description', 'period', 'total_amount', 'payment_remarks', 'program_id']));
            }
        }
    }
}
