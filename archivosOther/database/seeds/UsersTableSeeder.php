<?php

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
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@email.com',
            'address' => 'cochabamba',
            'password' => bcrypt('user123'),
            'phone' => '12233',
            'profile_image' => 'http://via.placeholder.com/150*150',
            'type'=> '3',
        ]);

        DB::table('users')->insert([
            'name' => 'wilson',
            'email' => 'wilson@email.com',
            'address' => 'cochabamba',
            'password' => bcrypt('wilson123'),
            'phone' => '1223',
            'profile_image' => 'http://via.placeholder.com/150*150',
            'type'=> '2',
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'address' => 'cochabamba',
            'password' => bcrypt('admin123'),
            'phone' => '122',
            'profile_image' => 'http://via.placeholder.com/150*150',
            'type'=> '1',
        ]);
    }
}
