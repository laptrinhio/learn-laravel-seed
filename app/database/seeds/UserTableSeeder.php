<?php

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	
	public function run() 
	{
		$faker = Faker::create();

		for($i = 0; $i < 100; ++$i) {
			$user = User::create([
				'username'  => $faker->username,
				'email'     => $faker->email,
				'password'  => $faker->word,
				'firstname' => $faker->firstname,
				'lastname'  => $faker->lastname,
				'address'   => $faker->address
			]);
		}
	}
}