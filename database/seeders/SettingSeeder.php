<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
           'title'=>'Personal Web',
           'logo'=>'',
            'facebook'=>'face',
            'twitter'=>'twit',
            'instagram'=>'ins',
            'github'=>'git',
            'favicon'=>'',
        ]);
    }
}
