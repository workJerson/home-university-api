<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(app_path().'/Support/provinces.json'));
        foreach ($data->data->provinces as $key => $value) {
            Province::updateOrCreate([
                'id' => $value->id,
                'psgcCode' => $value->psgcCode,
                'provDesc' => $value->provDesc,
                'regCode' => $value->regCode,
                'provCode' => $value->provCode,
            ]);
        }
    }
}
