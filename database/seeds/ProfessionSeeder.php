<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('professions')->insert([
			'title' =>'Back-end Developer',
		]);

		DB::table('professions')->insert([
			'title' =>'Front-end developer',
		]);

		DB::table('professions')->insert([
			'title' =>'Designer',
		]);

		DB::table('professions')->insert([
			'title' =>'Admin BD',
		]);     
    }
}
