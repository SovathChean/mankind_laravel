<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $group = [
          'Cancer',
          'flu',
          'hypertension',
          'Heart Attack',
          'common disease',
        ];
        foreach($group as $a)
        {
          Department::create(['name'=>$a]);
        }
    }   
}
