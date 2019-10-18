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
    	$faker = Faker\Factory::create();

    	$limit = 10;

    	for ($i = 0; $i < $limit; $i++) {
    		DB::table('patients')->insert([
    			'patient_name' => $faker->name,
    			'patient_email' => $faker->unique()->email,
                'patient_password' => '$2y$10$ZR7yEWAi36jMMfMpo3iS2.vqhDz.AvkhN7n0seu80aQ94cQL9mUTe', // secret
                'remember_token' => Str::random(10),
                'create_at' => new DateTime,
                'update_at' => new DateTime,
                'user_id' => $i+1;
            ]);
    	}
    }
}