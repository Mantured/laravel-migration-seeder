<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            for ($i = 0; $i < 100; $i++)
            {
                $newUser = new User();
                $newUser->image = $faker->imageUrl(640, 480, 'people', true);
                $newUser->first_name = $faker->firstName($gender = null);
                $newUser->last_name = $faker->lastName();
                $newUser->age = $faker->numberBetween(18, 100);
                $newUser->bio = $faker->paragraph(2);
                $newUser->location = $faker->state();
                $newUser->is_single = $faker->boolean();
                $newUser->save();
            }
    }
}
