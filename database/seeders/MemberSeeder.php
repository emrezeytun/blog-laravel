<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Members')->insert([
            'name' => 'John Doe',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus fugit quidem, explicabo repellendus vero dignissimos placeat, ducimus numquam non fugiat ratione. Odit sequi, minus aperiam. Aperiam maiores, esse? Ipsa, neque.',
            'photo' => 'uploads/about.jpg',
            'phone' => '+905050000000',
            'mail' => 'x@gmail.com',
            'created_at' => now(),
        ]);
    }
}
