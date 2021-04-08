<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'id' => 1,
                'name' => 'Bachelor of Arts in Political Science (BAPolSci)',
                'description' => 'Bachelor of Arts in Political Science',
                'program_id' => 1,
                'status' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Bachelor of Science in Office Administration',
                'description' => 'Bachelor of Science in Office Administration',
                'program_id' => 1,
                'status' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Bachelor of Science in Business Administration - Finance Management',
                'description' => 'Bachelor of Science in Business Administration - Finance Management',
                'program_id' => 1,
                'status' => 2,
            ],
            [
                'id' => 4,
                'name' => 'Bachelor of Science in Business Administration - Human Resource Development and Management',
                'description' => 'Bachelor of Science in Business Administration - Human Resource Development and Management',
                'program_id' => 1,
                'status' => 2,
            ],
            [
                'id' => 5,
                'name' => 'Bachelor of Science in Business Administration - Marketing Management',
                'description' => 'Bachelor of Science in Business Administration - Marketing Management',
                'program_id' => 1,
                'status' => 2,
            ],
            [
                'id' => 6,
                'name' => 'Bachelor of Science in Entrepreneurial Management',
                'description' => 'Bachelor of Science in Entrepreneurial Management',
                'program_id' => 1,
                'status' => 2,
            ],
            [
                'id' => 7,
                'name' => 'Master in Development Management and Governance',
                'description' => 'Master in Development Management and Governance',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Master in Management - Public Administration',
                'description' => 'Master in Management - Public Administration',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Master in Management - Educational Management',
                'description' => 'Master in Management - Educational Management',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 10,
                'name' => 'Master in Management - Health Administration',
                'description' => 'Master in Management - Health Administration',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 11,
                'name' => 'Master in Management - Hospital Administration',
                'description' => 'Master in Management - Hospital Administration',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 12,
                'name' => 'Master in Management - Police Administration',
                'description' => 'Master in Management - Police Administration',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 13,
                'name' => 'Master in Management - Information Technology',
                'description' => 'Master in Management - Information Technology',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 14,
                'name' => 'Master in Public Administration',
                'description' => 'Master in Public Administration',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 15,
                'name' => 'Master in Business Administration',
                'description' => 'Master in Business Administration',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 16,
                'name' => 'Master of Arts in Education',
                'description' => 'Master of Arts in Education',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 17,
                'name' => 'Doctor of Public Administration',
                'description' => 'Doctor of Public Administration',
                'program_id' => 3,
                'status' => 1,
            ],
            [
                'id' => 18,
                'name' => 'Doctor of Business Administration',
                'description' => 'Doctor of Business Administration',
                'program_id' => 3,
                'status' => 1,
            ],
            [
                'id' => 19,
                'name' => 'PhD in Development Administration',
                'description' => 'PhD in Development Administration',
                'program_id' => 3,
                'status' => 1,
            ],
            [
                'id' => 20,
                'name' => 'Executive Doctorate in Leadership - Public Management',
                'description' => 'Executive Doctorate in Leadership - Public Management',
                'program_id' => 3,
                'status' => 1,
            ],
            [
                'id' => 21,
                'name' => 'Doctor of Education',
                'description' => 'Doctor of Education',
                'program_id' => 3,
                'status' => 1,
            ],
            [
                'id' => 22,
                'name' => 'Master of Science in Social Working',
                'description' => 'Master of Science in Social Work',
                'program_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 23,
                'name' => 'Bachelor of Science in Business Administration (BSBA)',
                'description' => 'Bachelor of Science in Business Administration (BSBA)',
                'program_id' => 1,
                'status' => 1,
            ],
            [
                'id' => 24,
                'name' => 'Bachelor of Science in International Hospitality Management (BSIHM)',
                'description' => 'Bachelor of Science in International Hospitality Management (BSIHM)',
                'program_id' => 1,
                'status' => 1,
            ],
        ];

        foreach ($courses as $course) {
            $courseObject = Course::firstOrCreate(['id' => $course['id']], $course);
            if (!$courseObject->wasRecentlyCreated) {
                $courseObject->update(Arr::only($course, ['name', 'description', 'program_id', 'status']));
            }
        }
    }
}
