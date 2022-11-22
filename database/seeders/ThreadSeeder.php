<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$tutos = DB::table('tutorials')->count();
	for ($i = 1; $i <= $tutos; $i++)
	{
	    DB::table('threads')->insert([
		'tutorial_id' => $i,
	    ]);
	}
    }
}
