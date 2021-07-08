<?php

namespace Database\Seeders;

require_once 'vendor/autoload.php';

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SekretarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        public $faker= Faker\Factory::create();

        for ($i=0; $i < 5; $i++) { 
        	\DB::table('users')->insert([
        		'role' => 'Sekretaris',
	            'name' => $this->faker->name(),
	            'email' => $this->faker->unique()->safeEmail(),
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
        	]);
        }
    }
}
