<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = 'About Me';

        DB::table('pages')->insert([
            'title'=> $title,
            'slug' => str_slug($title),
            'content' => " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum commodi, voluptates sit iusto perferendis, unde.


 At quas inventore facilis laborum? Neque suscipit aliquam possimus sint ab, earum itaque eius voluptatibus odit voluptates modi quod quo, reiciendis soluta id voluptatum et adipisci nihil ea magnam libero natus eveniet expedita. Laborum id esse accusamus perferendis omnis vero ipsa minima iusto voluptas adipisci nihil ullam rem impedit, cumque alias est ut repudiandae corporis eligendi similique. Ipsa saepe, commodi cumque consequatur, fuga quaerat tenetur.


 voluptate autem excepturi doloremque incidunt nostrum vel aperiam. Ad harum praesentium iusto illum aut atque, nam quisquam est nulla nesciunt accusamus ex pariatur perspiciatis corporis eaque reprehenderit. Cumque dolorem aut laboriosam possimus officiis voluptas voluptatum, tenetur quae architecto repellat facere corporis nam nisi facilis rerum. Consequuntur minus obcaecati fugiat repellat debitis iusto natus, dolorum nisi reiciendis repudiandae officia aut. Placeat accusamus dolores magnam, sint porro recusandae molestias consectetur quisquam qui nostrum, earum atque assumenda! Modi suscipit repellendus perspiciatis maxime magni. Est distinctio facere eligendi obcaecati sed, esse dignissimos corrupti? Rerum assumenda a excepturi quas, aliquid ipsam iusto? Dignissimos error, obcaecati expedita.


 Rerum iure, ducimus, temporibus, rem amet et optio excepturi nobis quaerat, culpa magni dolor veniam libero. Ducimus laborum aut corporis debitis rerum similique vero saepe a voluptates, sed ipsa, repellat consequuntur aliquam! Cum culpa dolore quis. Ducimus commodi doloribus voluptatum aspernatur eos incidunt aliquam atque iste consequatur similique. Optio nam animi deleniti, cumque, possimus, ipsum asperiores ducimus molestiae laboriosam quas iusto, similique odio.


 veniam rerum enim? Fugiat voluptas blanditiis fugit mollitia molestiae vitae corporis assumenda recusandae error aspernatur quaerat, ea voluptatum voluptate illo dolorum nihil tempora aut laborum quos saepe nostrum est. Optio voluptates, quae totam! Quaerat esse quasi.",
            'image' => 'uploads/about.jpg',
            'created_at'=> now(),
            'updated_at' => now()
        ]);

    }
}
