<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience')->insert(
            [
                'id' => 2,
                'title' => 'Stage PHP Developer',
                'period' => 'Augustus 2015 - December 2015',
                'stack' => json_encode(['PHP', 'CSS', 'HTML']),
                'description' => 'Deze stage omvatte het implementeren van design naar product voor de NS Servicewinkels op
                            grote stations. Daarnaast heb ik meeontwikkeld aan een applicatie voor Right to Play.',
                'image' => 'img/logo/heuvelman.png',
                'alt_image' => 'Heuvelman Sound & Vision',
                'types' => json_encode(['internship']),
                'company' => 'heuvelman',
            ]
        );

        DB::table('experience')->insert(
            [
                'id' => 3,
                'title' => 'Afstudeer Stage PHP Developer',
                'period' => 'November 2016 - April 2017',
                'stack' => json_encode(['PHP', 'Shopware', 'Smarty', 'CSS', 'HTML']),
                'description' => 'Tijdens deze afstudeerstage ben ik verantwoordelijk geweest voor het bouwen van een nieuwe
                            webshop, hierbij ook het klantcontact afgehandeld en het design naar code vertaald.',
                'image' => 'img/logo/treshold.png',
                'alt_image' => 'Treshold Automatisering',
                'types' => json_encode(['internship']),
                'company' => 'treshold',
            ]
        );

        DB::table('experience')->insert(
            [
                'id' => 4,
                'title' => 'Fullstack Developer',
                'period' => 'November 2017 - April 2018',
                'stack' => json_encode(['PHP', 'Yii', 'Bootstrap', 'MySQL', 'Git']),
                'description' => 'Samen met het WOM ( Work Order Manager ) team nieuwe features en improvements gemaakt op de
                            huidige applicatie.',
                'image' => 'img/logo/pti.svg',
                'alt_image' => 'Pincode Telenet',
                'types' => json_encode(['job']),
                'company' => 'pti',
            ]
        );

        DB::table('experience')->insert(
            [
                'id' => 6,
                'title' => 'Fullstack Developer',
                'period' => 'November 2018 - Augustus 2019',
                'stack' => json_encode(['PHP', 'Laravel', 'Mysql', 'Git']),
                'description' => 'Verantwoordelijk voor het bouwen van diverse sites en webshops, met Laravel in de spotlight.
                            Mijn focus lag op de backend van de betreffende applicaties.',
                'image' => 'img/logo/ifresh.svg',
                'alt_image' => 'iFresh Software Development',
                'types' => json_encode(['job']),
                'company' => 'ifresh',
            ]
        );

        DB::table('experience')->insert(
            [
                'id' => 7,
                'title' => 'Fullstack Developer',
                'period' => 'Oktober 2019 - April 2020',
                'stack' => json_encode(['PHP', 'Yii', 'Mysql', 'SVN']),
                'description' => 'Ontwikkeling van een Online Afspraken omgeving op maat voor een grote klant.
                              Daarnaast nieuwe features uitgedacht en tot realisatie gebracht in het standaard Online Afspraken systeem',
                'image' => 'img/logo/onlineafspraken.png',
                'alt_image' => 'Online Afspraken B.V.',
                'types' => json_encode(['job']),
                'company' => 'onlineafspraken',
            ]
        );

        DB::table('experience')->insert(
            [
                'id' => 8,
                'title' => 'Fullstack Developer',
                'period' => 'Oktober 2020 - Heden',
                'stack' => json_encode(['PHP', 'Laravel', 'Mysql', 'BitBucket', 'AWS']),
                'description' => 'Ontwikkeling en verbetering van het OrderBuddy systeem, dat voor horeca mogelijkheden biedt om online en op lokatie orders van klanten aan te nemen en te verwerken.
                            Daarnaast doorontwikkeling van een online reserveringssysteem voor een diner verrassingsconcept.',
                'image' => 'img/logo/foodticket.png',
                'alt_image' => 'Foodticket',
                'types' => json_encode(['job']),
                'company' => 'foodticket',
            ]
        );
    }
}
