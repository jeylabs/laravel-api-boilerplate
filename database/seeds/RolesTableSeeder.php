<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'System Administrator',
                'description' => 'System Administrator',
                'is_deletable' => 'No',
                'access_level' => '1000',
            ],
            [
                'name' => 'Administrator',
                'description' => 'Administrator',
                'is_deletable' => 'No',
                'access_level' => '900',
            ],

        ];

        foreach ($roles as $role){
            Role::create($role);
        }
    }
}
