<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $user = new User();
            $user->name = $faker->name();
            $user->email = $faker->email();
            $user->password = bcrypt($faker->regexify('[a-zA-Z0-9]{10}'));
            $user->save();
        }
    }
}
