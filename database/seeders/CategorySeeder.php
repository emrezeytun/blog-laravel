<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Technology',
            'slug' => 'technology',
            'color' => '#52006A',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Health',
            'slug' => 'health',
            'color' => '#4AA96C',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Software',
            'slug' => 'software',
            'color' => '#C67ACE',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Art',
            'slug' => 'art',
            'color' => '#11698E',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Science',
            'slug' => 'science',
            'color' => '#433D3C',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Education',
            'slug' => 'education',
            'color' => '#A20A0A',
            'created_at' => now(),
            'updated_at' => now()
        ]);

     }
}
