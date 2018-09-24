<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NoticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notices')->insert([
            'title' => 'notice 1',
            'description' => 'notice 1',
            'posted_by' => 'user',
            'img_route' => 'cochabamba',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('notices')->insert([
            'title' => 'notice 2',
            'description' => 'notice 2',
            'posted_by' => 'user',
            'img_route' => 'cochabamba',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('notices')->insert([
            'title' => 'notice 3',
            'description' => 'notice 3',
            'posted_by' => 'user',
            'img_route' => 'cochabamba',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('notices')->insert([
            'title' => 'notice 4',
            'description' => 'notice 4',
            'posted_by' => 'user',
            'img_route' => 'cochabamba',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
