<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	// seed test user
	DB::table('users')->insert([
	    'name' => 'test_user',
	    'email' => 'test_email'.'@gmail.com',
	    'password' => Hash::make('password'),
	]);
	// factory for users
	User::factory()
	    ->count(30)
	    ->create();
    }
}
