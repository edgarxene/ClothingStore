<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
    	factory(App\User::class)->create([
        	'name' => 'Edgar',
        	'role' => 'admin',
            'email' => 'edgarxene@gmail.com',
            'password' => 'admin'
        	]);
        factory(App\User::class, 9)->create();
    }
}
