<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'username' => 'jfell',
        	'email' => 'jakefell@hotmail.co.uk',
        	'password' => bcrypt('password'),
        	'is_admin' => true,
    	]);
    }
}
