<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        // reset users table
        DB::table('users')->truncate();

        // insert 3 users
        DB::table('users')->insert([
            [
                'name'=>'rizal',
                'username'=>'rizal',
                'email'=>'rizal@gmail.com',
                'password'=> bcrypt('11113'),
                'role_id'=> 1,
                'is_active'=> 1
            ],
            [
                'name' => 'admin',
                'username'=>'admin',
                'email' => 'admin@gmail.com',
                'password'=> bcrypt('secret'),
                'role_id'=> 1,
                'is_active'=> 1
            ],
            [
                'name'=> 'User',
                'username'=>'user',
                'email'=> 'user@gmail.com',
                'password'=> bcrypt('secret'),
                'role_id'=> 2,
                'is_active'=> 1
            ],
        ]);
    }
}
