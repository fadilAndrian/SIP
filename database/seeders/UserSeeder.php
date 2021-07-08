<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        	[
        		'role' => 'Sekretaris',
	            'name' => 'Febrian',
	            'email' => 'febrian@mail.com',
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
	        ],
	        [
        		'role' => 'Sekretaris',
	            'name' => 'Aqib',
	            'email' =>'aqib@mail.com',
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
	        ],
	        [
        		'role' => 'HRD',
	            'name' => 'Fadil',
	            'email' => 'fadil@mail.com',
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
	        ],
	        [
        		'role' => 'HRD',
	            'name' => 'Khusnul',
	            'email' => 'khusnul@mail.com',
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
	        ],
	        [
        		'role' => 'Direksi',
	            'name' => 'Lida',
	            'email' => 'lida@mail.com',
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
	        ],
	        [
        		'role' => 'Pegawai',
	            'name' => 'Rian',
	            'email' => 'rian@mail.com',
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
	        ],
	        [
        		'role' => 'Pegawai',
	            'name' => 'Ico',
	            'email' => 'ico@mail.com',
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
	        ],
	        [
        		'role' => 'Pegawai',
	            'name' => 'Prayoga',
	            'email' => 'prayoga@mail.com',
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
	        ],
	        [
        		'role' => 'Pegawai',
	            'name' => 'Kharisma',
	            'email' => 'kharisma@mail.com',
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
	        ],
	        [
        		'role' => 'Pegawai',
	            'name' => 'Wibisono',
	            'email' => 'wibisono@mail.com',
	            'email_verified_at' => now(),
	            'password' => Hash::make("12345678"), // password
	            'remember_token' => Str::random(10),
	        ],
        ];

        \DB::table('users')->insert($user);
    }
}
