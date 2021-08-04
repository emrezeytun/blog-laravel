<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' =>'John Doe',
            'password' => bcrypt(123456),
            'email' => 'admin@admin.com',
            'created_at' => now(),
            'updated_at' => now(),
            ]);
    }
}
