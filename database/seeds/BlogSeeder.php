<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Blog::create([
          'ht_id'=>'6',
          'title'=>'covid-19 now spread in cambodia',
          'body'=>'The Ministry of Health today has confirmed two new cases of Covid-19 in
          the capital and is looking for those who came in direct contact with the two patients for testing.',
          'user_id'=>'1',
        ]);
    }
}
