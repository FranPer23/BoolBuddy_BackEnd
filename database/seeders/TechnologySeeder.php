<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $technologies = ['Laravel', 'Symfony', 'React', 'Vue', 'Angular', 'Node.js', 'Django', 'Flask', 'Ruby on Rails', 'Spring Boot', 'ASP.NET', 'Phoenix', 'Express.js'];

        foreach ($technologies as $technology_value) {
            $new_technology = new Technology();
            $new_technology->name = $technology_value;
            $new_technology->type = 0;
            $new_technology->save();
        }
    }
}
