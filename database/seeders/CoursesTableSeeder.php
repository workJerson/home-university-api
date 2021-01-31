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
                'name' => 'Bachelor Of Arts in Political Science',
                'description' => 'Bachelor Of Arts in Political Science',
                'program_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Bachelor Of Science in Office Administration',
                'description' => 'Bachelor Of Science in Office Administration',
                'program_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Bachelor Of Science in Business Administration - Finance Management',
                'description' => 'Bachelor Of Science in Business Administration - Finance Management',
                'program_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Bachelor Of Science in Business Administration - Human Resource Development and Management',
                'description' => 'Bachelor Of Science in Business Administration - Human Resource Development and Management',
                'program_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Bachelor Of Science in Business Administration - Marketing Management',
                'description' => 'Bachelor Of Science in Business Administration - Marketing Management',
                'program_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Bachelor Of Science in Entrepreneurial Management',
                'description' => 'Bachelor Of Science in Entrepreneurial Management',
                'program_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Master in Development Management and Governance',
                'description' => 'Master in Development Management and Governance',
                'program_id' => 2,
            ],
            [
                'id' => 8,
                'name' => 'Master in Management - Public Administration',
                'description' => 'Master in Management - Public Administration',
                'program_id' => 2,
            ],
            [
                'id' => 9,
                'name' => 'Master in Management - Educational Management',
                'description' => 'Master in Management - Educational Management',
                'program_id' => 2,
            ],
            [
                'id' => 10,
                'name' => 'Master in Management - Health Administration',
                'description' => 'Master in Management - Health Administration',
                'program_id' => 2,
            ],
            [
                'id' => 11,
                'name' => 'Master in Management - Hospital Administration',
                'description' => 'Master in Management - Hospital Administration',
                'program_id' => 2,
            ],
            [
                'id' => 12,
                'name' => 'Master in Management - Police Administration',
                'description' => 'Master in Management - Police Administration',
                'program_id' => 2,
            ],
            [
                'id' => 13,
                'name' => 'Master in Management - Information Technology',
                'description' => 'Master in Management - Information Technology',
                'program_id' => 2,
            ],
            [
                'id' => 14,
                'name' => 'Master in Public Administration',
                'description' => 'Master in Public Administration',
                'program_id' => 2,
            ],
            [
                'id' => 15,
                'name' => 'Master in Business Administration',
                'description' => 'Master in Business Administration',
                'program_id' => 2,
            ],
            [
                'id' => 16,
                'name' => 'Master of Arts in Education',
                'description' => 'Master of Arts in Education',
                'program_id' => 2,
            ],
            [
                'id' => 17,
                'name' => 'Doctor of Public Administration',
                'description' => 'Doctor of Public Administration',
                'program_id' => 3,
            ],
            [
                'id' => 18,
                'name' => 'Doctor of Business Administration',
                'description' => 'Doctor of Business Administration',
                'program_id' => 3,
            ],
            [
                'id' => 19,
                'name' => 'PhD in Development Administration',
                'description' => 'PhD in Development Administration',
                'program_id' => 3,
            ],
            [
                'id' => 20,
                'name' => 'Executive Doctorate in Leadership - Public Management',
                'description' => 'Executive Doctorate in Leadership - Public Management',
                'program_id' => 3,
            ],
            [
                'id' => 21,
                'name' => 'Doctor of Education',
                'description' => 'Doctor of Education',
                'program_id' => 3,
            ],
        ];

        foreach ($courses as $course) {
            $courseObject = Course::firstOrCreate(['id' => $course['id']], $course);
            if (!$courseObject->wasRecentlyCreated) {
                $courseObject->update(Arr::only($course, ['name', 'description', 'program_id']));
            }
        }
    }
}
