<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert(
            [
                'id' => 1,
                'skill' => 'HTML/BLADE/TWIG/SMARTY',
                'years_experience' => 3,
                'type' => 'werkervaring',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 2,
                'skill' => 'HTML/BLADE/TWIG/SMARTY',
                'years_experience' => 3,
                'type' => 'studie',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 3,
                'skill' => 'HTML/BLADE/TWIG/SMARTY',
                'years_experience' => 1,
                'type' => 'autodidact',
            ]
        );

        // -----------------------------

        DB::table('skills')->insert(
            [
                'id' => 4,
                'skill' => 'LESS/SASS/CSS',
                'years_experience' => 3,
                'type' => 'werkervaring',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 5,
                'skill' => 'LESS/SASS/CSS',
                'years_experience' => 2.5,
                'type' => 'studie',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 6,
                'skill' => 'LESS/SASS/CSS',
                'years_experience' => 1,
                'type' => 'autodidact',
            ]
        );

        // -----------------------------

        DB::table('skills')->insert(
            [
                'id' => 7,
                'skill' => 'PHP',
                'years_experience' => 2,
                'type' => 'werkervaring',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 8,
                'skill' => 'PHP',
                'years_experience' => 2,
                'type' => 'studie',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 9,
                'skill' => 'PHP',
                'years_experience' => 1,
                'type' => 'autodidact',
            ]
        );

        // -----------------------------

        DB::table('skills')->insert(
            [
                'id' => 10,
                'skill' => 'MySQL',
                'years_experience' => 2,
                'type' => 'werkervaring',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 11,
                'skill' => 'MySQL',
                'years_experience' => 2,
                'type' => 'studie',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 12,
                'skill' => 'MySQL',
                'years_experience' => 0.5,
                'type' => 'autodidact',
            ]
        );

        // -----------------------------

        DB::table('skills')->insert(
            [
                'id' => 13,
                'skill' => 'Laravel',
                'years_experience' => 2,
                'type' => 'werkervaring',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 14,
                'skill' => 'Laravel',
                'years_experience' => 0,
                'type' => 'studie',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 15,
                'skill' => 'Laravel',
                'years_experience' => 1,
                'type' => 'autodidact',
            ]
        );

        // -----------------------------

        DB::table('skills')->insert(
            [
                'id' => 16,
                'skill' => 'Yii',
                'years_experience' => 1,
                'type' => 'werkervaring',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 17,
                'skill' => 'Yii',
                'years_experience' => 0,
                'type' => 'studie',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 18,
                'skill' => 'Yii',
                'years_experience' => 0.2,
                'type' => 'autodidact',
            ]
        );

        // -----------------------------

        DB::table('skills')->insert(
            [
                'id' => 19,
                'skill' => 'Symfony',
                'years_experience' => 0,
                'type' => 'werkervaring',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 20,
                'skill' => 'Symfony',
                'years_experience' => 0,
                'type' => 'studie',
            ]
        );

        DB::table('skills')->insert(
            [
                'id' => 21,
                'skill' => 'Symfony',
                'years_experience' => 0.5,
                'type' => 'autodidact',
            ]
        );
    }
}
