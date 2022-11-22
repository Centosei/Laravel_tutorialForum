<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	DB::table('categories')->insert([
	    'name' => 'programming',
	]);
	DB::table('categories')->insert([
	    'name' => 'cooking',
	]);
	DB::table('categories')->insert([
	    'name' => 'language',
	]);
	Category::factory()
	    ->count(15)
	    ->create();
    }
}
