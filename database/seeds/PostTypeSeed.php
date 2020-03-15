<?php

use Illuminate\Database\Seeder;
use App\PostType;

class PostTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post_types = [
          'blog',
          'news',
          'feedback',
        ];
        foreach($post_types as $post)
        {
          PostType::create(['name'=> $post]);
        }

    }
}
