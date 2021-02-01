<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::updateOrCreate(
            [
                'username' => 'huAdmin',
            ],
            [
                'email' => 'huAdmin@yopmail.com',
                'password' => bcrypt('Password@123'),
                'account_type' => 1,
                'status' => 1,
            ]
        );

        if ($superAdmin->userDetail) {
            $superAdmin
                ->userDetail()
                ->update([
                    'first_name' => 'HU',
                    'last_name' => 'Admin',
                ]);
        } else {
            UserDetail::create([
                'user_id' => $superAdmin->id,
                'first_name' => 'HU',
                'last_name' => 'Admin',
            ]);
        }
    }
}
