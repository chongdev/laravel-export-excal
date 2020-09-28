<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();
        $password = Hash::make('1234');

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 500; $i++) {
            User::create([

                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => $password,
                // 'remember_token' => Str::random(10),

            ]);
        }
    }
}
