<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        for ($i = 0; $i < 20; $i++) {

            $profile = new Profile();
            $profile->name = $users[$i]->name;
            $profile->surname = $faker->lastName();
            $profile->address = $faker->streetAddress();
            $profile->city = $faker->city();
            $profile->photo = $faker->imageUrl(300, 300);
            $profile->mobile = $faker->randomNumber(9, true);
            $profile->phone = $faker->randomNumber(8, true);
            $profile->cv = $faker->imageUrl(300, 300);
            $profile->field = $faker->jobTitle();
            $profile->service = $faker->sentence(3);
            $profile->user_id = $users[$i]->id;


            $profile->save();
        }
    }
}
