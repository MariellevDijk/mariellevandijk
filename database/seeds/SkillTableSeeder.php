<?php

use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'id' => 1,
            'skill' => 'HTML',
            'years_experience' => 4,
            'type' => json_encode(['frontend']),
        ]);

        DB::table('skills')->insert([
            'id' => 2,
            'skill' => 'PHP',
            'years_experience' => 4,
            'type' => json_encode(['backend', 'top']),
        ]);

        DB::table('skills')->insert([
            'id' => 3,
            'skill' => 'MySQL',
            'years_experience' => 3,
            'type' => json_encode(['database', 'top']),
        ]);

        DB::table('skills')->insert([
            'id' => 4,
            'skill' => 'CSS',
            'years_experience' => 3,
            'type' => json_encode(['frontend', 'top']),
        ]);

        DB::table('skills')->insert([
            'id' => 5,
            'skill' => 'LESS',
            'years_experience' => 2,
            'type' => json_encode(['frontend']),
        ]);

        DB::table('skills')->insert([
            'id' => 6,
            'skill' => 'Bootstrap',
            'years_experience' => 2,
            'type' => json_encode(['frontend']),
        ]);

        DB::table('skills')->insert([
            'id' => 7,
            'skill' => 'JSON',
            'years_experience' => 2,
            'type' => json_encode(['overig']),
        ]);

        DB::table('skills')->insert([
            'id' => 8,
            'skill' => 'jQuery',
            'years_experience' => 1,
            'type' => json_encode(['frontend']),
        ]);

        DB::table('skills')->insert([
            'id' => 9,
            'skill' => 'Laravel',
            'years_experience' => 1,
            'type' => json_encode(['framework', 'top']),
        ]);

        DB::table('skills')->insert([
            'id' => 10,
            'skill' => 'Symfony',
            'years_experience' => 1,
            'type' => json_encode(['framework', 'top']),
        ]);

        DB::table('skills')->insert([
            'id' => 11,
            'skill' => 'Javascript',
            'years_experience' => 1,
            'type' => json_encode(['frontend']),
        ]);

        DB::table('skills')->insert([
            'id' => 12,
            'skill' => 'Node.JS',
            'years_experience' => 0.5,
            'type' => json_encode(['frontend', 'backend']),
        ]);

        DB::table('skills')->insert([
            'id' => 13,
            'skill' => 'Angular.JS',
            'years_experience' => 0.5,
            'type' => json_encode(['frontend']),
        ]);

        DB::table('skills')->insert([
            'id' => 14,
            'skill' => 'Yii',
            'years_experience' => 0.5,
            'type' => json_encode(['framework']),
        ]);

        DB::table('skills')->insert([
            'id' => 15,
            'skill' => 'OOP',
            'years_experience' => 4,
            'type' => json_encode(['techniques']),
        ]);

        DB::table('skills')->insert([
            'id' => 16,
            'skill' => 'Agile',
            'years_experience' => 2,
            'type' => json_encode(['management', 'top']),
        ]);

        DB::table('skills')->insert([
            'id' => 17,
            'skill' => 'Scrum',
            'years_experience' => 2,
            'type' => json_encode(['management']),
        ]);
    }
}
