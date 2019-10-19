<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('patients')->insert([
                'name' => $faker->name,
                'identity_number' => Str::random(10),
                // 'birthday' => $faker->birthday,
                'address' => $faker->address,
        // 'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->email,
                'password' => '$2y$10$ZR7yEWAi36jMMfMpo3iS2.vqhDz.AvkhN7n0seu80aQ94cQL9mUTe', // secret
            ]);
        }
    }
}