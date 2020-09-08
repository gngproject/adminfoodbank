<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin  = User::create([
            'name'      => 'Admin Role',
            'email'     => 'admin@foodbank.test',
            'password'  => bcrypt('123456789'),
        ]);

        $admin->assignRole('admin');


        $user  = User::create([
            'name'      => 'User Role',
            'email'     => 'wildanabdurrohman11@foodbank.test',
            'password'  => bcrypt('123456789'),
        ]);

        $user->assignRole('user');
    }
}
