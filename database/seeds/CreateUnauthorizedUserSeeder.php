<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUnauthorizedUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
        	'name' => 'John',
        	'email' => 'john@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        $user = User::create([
        	'name' => 'fou',
        	'email' => 'fou@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
    }
}
