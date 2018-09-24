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
            'ci' => '123456789',
            'name' => 'user',
            'email' => 'user@email.com',
            'address' => 'cochabamba',
            'password' => bcrypt('user123'),
            'type'=> '3',
        ]);

        DB::table('users')->insert([
            'ci' => '123456780',
            'name' => 'wilson',
            'email' => 'wilson@email.com',
            'address' => 'cochabamba',
            'password' => bcrypt('wilson123'),
            'type'=> '2',
        ]);

        DB::table('users')->insert([
            'ci' => '111111111',
            'name' => 'admin',
            'email' => 'admin@email.com',
            'address' => 'cochabamba',
            'password' => bcrypt('admin123'),
            'type'=> '1',
        ]);
    }
}
