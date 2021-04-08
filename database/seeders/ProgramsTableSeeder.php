<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            [
                'id' => 1,
                'name' => 'Baccalaureate',
                'description' => 'Advance your career and acquire a bachelor’s degree through accelerated program with equivalency & accreditation features.',
            ],
            [
                'id' => 2,
                'name' => 'Masters',
                'description' => 'Propel your competencies through customized Master’s Degree Programs designed for the learners and industry needs.',
            ],
            [
                'id' => 3,
                'name' => 'Doctoral',
                'description' => 'Expand your analytical skills through Doctoral Degree Programs developed specifically for supervisorial and managerial positions; and for aspiring executives in public & private sectors.',
            ],
        ];

        foreach ($programs as $program) {
            $programObject = Program::firstOrCreate(['id' => $program['id']], $program);
            if (!$programObject->wasRecentlyCreated) {
                $programObject->update(Arr::only($program, ['name', 'description']));
            }
        }
    }
}
