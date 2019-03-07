<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

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
        ]);

        DB::table('users')->insert([
            'name' => 'wilson',
            'email' => 'wilson@email.com',
            'address' => 'cochabamba',
            'password' => bcrypt('wilson123'),
            'phone' => '1223',
            'profile_image' => 'http://via.placeholder.com/150*150',
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'address' => 'cochabamba',
            'password' => bcrypt('admin123'),
            'phone' => '122',
            'profile_image' => 'http://via.placeholder.com/150*150',
        ]);

        Role::create([
        	'name'		=> 'Admin',
        	'slug'  	=> 'admin',
        	'special' 	=> 'all-access'
        ]);

        Role::create([
        	'name'		=> 'Publisher',
        	'slug'  	=> 'publisher',
        	'special' 	=> 'no-access'
        ]);

    }
}
