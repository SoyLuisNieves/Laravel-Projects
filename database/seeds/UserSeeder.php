<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Luis Fernando Nieves',
        	'email' => 'luis.fernan.nieves@gmail.com',
        	'password' => bcrypt('laravel'), 
        ]);
    }
}
