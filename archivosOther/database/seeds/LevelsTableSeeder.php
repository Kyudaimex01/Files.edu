<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lev=[
            'Admin',
            'User',
            'Customer',
        ];

        for ($i=0; $i < 3 ; $i++) {		# c++..
            DB::table('levels')->insert([
                'behavior' => $lev[$i],
            ]);
        }
    }
}
