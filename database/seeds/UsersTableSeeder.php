<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => "Admin",
                'last_name' => "Admin",
                'email' => "admin@admin.com",
                'password' => bcrypt('secret'),
                'role_id' => 1,
            ]
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
