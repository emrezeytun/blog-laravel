<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'comment' => 'Laborum id esse accusamus perferendis omnis vero ipsa minima iusto voluptas adipisci nihil ullam rem impedit, cumque alias est ut repudiandae corporis eligendi similique. ',
            'name' => 'Ozge Guner',
            'article_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Voluptate autem excepturi doloremque incidunt nostrum vel aperiam. Ad harum praesentium iusto illum aut atque, nam quisquam est nulla nesciunt accusamus ex',
            'name' => 'Hamdi Uzak',
            'article_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Sut sed, aliquam dolore possimus ratione fugit nulla a voluptatem at nam voluptatibus optio quo iure ',
            'name' => 'Mehmet Cengiz',
            'article_id' => 4,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Molestias consectetur quisquam qui nostrum, earum atque assumenda! Modi suscipit repellendus perspiciatis maxime magni.',
            'name' => 'Ali Gunter ',
            'article_id' => 5,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Fugiat voluptas blanditiis fugit mollitia molestiae vitae corporis assumenda recusandae error aspernatur quaerat',
            'name' => 'Koray Aydin',
            'article_id' => 6,
            'created_at' => now(),
        ]);

    }
}
