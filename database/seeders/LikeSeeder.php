<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Like;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$users = DB::table('users')->count();
	for ($i = 1; $i <= $users; $i++)
	{
	    $tutos = range(1, 200);
	    shuffle($tutos);
	    for ($j = 0; $j < rand(0, 200); $j++)
	    {
		DB::table('likes')->insert([
		    'tutorial_id' => $tutos[$j],
		    'user_id' => $i,
		]);
	    }
	}
    }
}
