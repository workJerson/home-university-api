<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schools = [
            [
                'id' => 1,
                'name' => 'PHILIPPINE CHRISTIAN UNIVERSITY',
                'image_path' => 'http://hu-landing.s3-website-ap-southeast-1.amazonaws.com/assets/icons/PCU.png',
                'order' => 1,
            ],
            [
                'id' => 2,
                'name' => 'UNIVERSITY OF MAKATI',
                'image_path' => 'http://hu-landing.s3-website-ap-southeast-1.amazonaws.com/assets/icons/UMAK.png',
                'order' => 2,
            ],
            [
                'id' => 3,
                'name' => 'LYCEUM OF THE PHILIPPINES UNIVERSITY',
                'image_path' => 'http://hu-landing.s3-website-ap-southeast-1.amazonaws.com/assets/icons/LPU.png',
                'order' => 3,
            ],
            [
                'id' => 4,
                'name' => 'ISABELA STATE UNIVERSITY',
                'image_path' => 'http://hu-landing.s3-website-ap-southeast-1.amazonaws.com/assets/icons/ISU.png',
                'order' => 4,
            ],
        ];

        foreach ($schools as $school) {
            $schoolObject = School::firstOrCreate(['id' => $school['id']], $school);
            if (!$schoolObject->wasRecentlyCreated) {
                $schoolObject->update(Arr::only($school, ['name', 'description']));
            }
        }
    }
}
