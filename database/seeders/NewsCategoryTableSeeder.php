<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class NewsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsCategories = [
            [
                'id' => 1,
                'name' => 'CATEGORY 1',
                'description' => 'CATEGORY 1 DESCRIPTION',
            ],
        ];

        foreach ($newsCategories as $newsCategory) {
            $newsCategoryObject = NewsCategory::firstOrCreate(['id' => $newsCategory['id']], $newsCategory);
            if (!$newsCategoryObject->wasRecentlyCreated) {
                $newsCategoryObject->update(Arr::only($newsCategory, ['name', 'description']));
            }
        }
    }
}
