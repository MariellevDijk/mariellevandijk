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
            'years_experience' => 1.5,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 2,
            'skill' => 'HTML',
            'years_experience' => 2,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 3,
            'skill' => 'HTML',
            'years_experience' => 1,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 4,
            'skill' => 'PHP',
            'years_experience' => 1.5,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 5,
            'skill' => 'PHP',
            'years_experience' => 2,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 6,
            'skill' => 'PHP',
            'years_experience' => 1,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 7,
            'skill' => 'MySQL',
            'years_experience' => 1.5,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 8,
            'skill' => 'MySQL',
            'years_experience' => 2,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 9,
            'skill' => 'MySQL',
            'years_experience' => 0.5,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 10,
            'skill' => 'CSS',
            'years_experience' => 1.5,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 11,
            'skill' => 'CSS',
            'years_experience' => 2,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 12,
            'skill' => 'CSS',
            'years_experience' => 0.5,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 13,
            'skill' => 'LESS/SASS',
            'years_experience' => 1,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 14,
            'skill' => 'LESS/SASS',
            'years_experience' => 1,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 15,
            'skill' => 'LESS/SASS',
            'years_experience' => 0.5,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 16,
            'skill' => 'Bootstrap',
            'years_experience' => 1,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 17,
            'skill' => 'Bootstrap',
            'years_experience' => 2,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 18,
            'skill' => 'Bootstrap',
            'years_experience' => 0.5,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 19,
            'skill' => 'JSON',
            'years_experience' => 1,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 20,
            'skill' => 'JSON',
            'years_experience' => 0.5,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 21,
            'skill' => 'JSON',
            'years_experience' => 0.5,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 22,
            'skill' => 'jQuery',
            'years_experience' => 0.5,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 23,
            'skill' => 'jQuery',
            'years_experience' => 0.5,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 24,
            'skill' => 'jQuery',
            'years_experience' => 0.5,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 25,
            'skill' => 'Laravel',
            'years_experience' => 1,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 26,
            'skill' => 'Laravel',
            'years_experience' => 0,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 27,
            'skill' => 'Laravel',
            'years_experience' => 0.5,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 28,
            'skill' => 'Symfony',
            'years_experience' => 0,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 29,
            'skill' => 'Symfony',
            'years_experience' => 0,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 30,
            'skill' => 'Symfony',
            'years_experience' => 0.5,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 31,
            'skill' => 'Javascript',
            'years_experience' => 1,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 32,
            'skill' => 'Javascript',
            'years_experience' => 0.2,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 33,
            'skill' => 'Javascript',
            'years_experience' => 0.5,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 34,
            'skill' => 'Node.JS/Angular.JS',
            'years_experience' => 0,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 35,
            'skill' => 'Node.JS/Angular.JS',
            'years_experience' => 0.5,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 36,
            'skill' => 'Node.JS/Angular.JS',
            'years_experience' => 0,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 37,
            'skill' => 'Yii',
            'years_experience' => 0.5,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 38,
            'skill' => 'Yii',
            'years_experience' => 0,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 39,
            'skill' => 'Yii',
            'years_experience' => 0.2,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 40,
            'skill' => 'OOP',
            'years_experience' => 1.5,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 41,
            'skill' => 'OOP',
            'years_experience' => 2,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 42,
            'skill' => 'OOP',
            'years_experience' => 1,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 43,
            'skill' => 'Agile',
            'years_experience' => 1.5,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 44,
            'skill' => 'Agile',
            'years_experience' => 0.2,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 45,
            'skill' => 'Agile',
            'years_experience' => 0.5,
            'type' => 'autodidact',
        ]);

        // -----------------------------

        DB::table('skills')->insert([
            'id' => 46,
            'skill' => 'Scrum',
            'years_experience' => 1.5,
            'type' => 'werkervaring',
        ]);

        DB::table('skills')->insert([
            'id' => 47,
            'skill' => 'Scrum',
            'years_experience' => 0,
            'type' => 'studie',
        ]);

        DB::table('skills')->insert([
            'id' => 48,
            'skill' => 'Scrum',
            'years_experience' => 0.2,
            'type' => 'autodidact',
        ]);


        // -----------------------------
    }
}
