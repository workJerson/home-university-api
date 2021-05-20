<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RegionsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(SuperAdminSeeder::class);
        $this->call(NewsCategoryTableSeeder::class);
        $this->call(ProgramRateTableSeeder::class);
    }
}
