<?php

use App\Model\User;
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
        User::create([
            'name'      => 'hai',
            'username'  => 'nvhai',
            'password'  => bcrypt('123'),
            'email'     => 'nvhai2306@gmail.com',
            'phone'     => '0833999693',
            'role'      => 1,
        ]);

        User::create([
            'name'      => 'thu',
            'username'  => 'thu',
            'password'  => bcrypt('123'),
            'email'     => 'sarangthunguyen@gmail.com',
            'phone'     => '01233999693',
            'role'      => 2,
        ]);
    }
}
