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
        // Initial users
        $initialUsers = [
            [
                'name' => 'Julio Amaya',
                'email' => 'atpjulio@yahoo.es',
                'password' => bcrypt('123456'),
                'user_type' => config('constants.userRoles.admin'),
            ],
            [
                'name' => 'Luis Ortega',
                'email' => 'luisormen@gmail.com',
                'password' => bcrypt('123456'),
                'user_type' => config('constants.userRoles.admin'),
            ],
        ];

        foreach ($initialUsers as $currentUser) {
            $user = User::create($currentUser);
            $user->assignRole(config('constants.userRolesString')[$currentUser['user_type']]);
        }
        
    }
}
