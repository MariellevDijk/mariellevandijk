<?php

namespace Database\Seeders;

use Faker\Provider\Company;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ExperienceSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(SkillSeeder::class);
    }
}
