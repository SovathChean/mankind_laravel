<?php

use Illuminate\Database\Seeder;
use App\Health_topics;

class healthTopicSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $health = [
          'Nutrition',
          'Food Safety',
          'New Disease',
          'Infection Control',
          'Environment',
        ];

        foreach($health as $h)
        {
          Health_topics::create(['topic'=>$h]);
        }
    }
}
