<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience')->insert([
            'id' => 1,
            'title' => 'Eerstejaars Stage PHP Developer',
            'period' => 'Mei 2015 - Juli 2015',
            'stack' => json_encode(['PHP', 'MODX', 'CSS', 'HTML']),
            'description' => 'Binnen Designbase heb ik meegewerkt aan diverse projecten, met een focus op het framework
                            MODX. Aan het eind van deze stage heb ik een plug-in
                            opgeleverd die het bedrijf van pas zou komen.',
            'image' => 'img/logo/designbase.png',
            'alt_image' => 'Designbase',
            'types' => json_encode(['internship']),
        ]);

        DB::table('experience')->insert([
            'id' => 2,
            'title' => 'Stage PHP Developer',
            'period' => 'Augustus 2015 - December 2015',
            'stack' => json_encode(['PHP', 'CSS', 'HTML']),
            'description' => 'Deze stage omvatte het implementeren van design naar product voor de NS Servicewinkels op
                            grote stations. Daarnaast heb ik meeontwikkeld aan een applicatie voor Right to Play.',
            'image' => 'img/logo/heuvelman.jpg',
            'alt_image' => 'Heuvelman Sound & Vision',
            'types' => json_encode(['internship']),
        ]);

        DB::table('experience')->insert([
            'id' => 3,
            'title' => 'Afstudeer Stage PHP Developer',
            'period' => 'November 2016 - April 2017',
            'stack' => json_encode(['PHP', 'Shopware', 'Smarty', 'CSS', 'HTML']),
            'description' => 'Tijdens deze afstudeerstage ben ik verantwoordelijk geweest voor het bouwen van een nieuwe
                            webshop, hierbij ook het klantcontact afgehandeld en het design naar code vertaald.',
            'image' => 'img/logo/treshold.jpeg',
            'alt_image' => 'Treshold Automatisering',
            'types' => json_encode(['internship']),
        ]);

        DB::table('experience')->insert([
            'id' => 4,
            'title' => 'PHP Developer',
            'period' => 'November 2017 - April 2018',
            'stack' => json_encode(['PHP', 'Yii', 'Bootstrap', 'MySQL', 'Git']),
            'description' => 'Samen met het WOM ( Work Order Manager ) team nieuwe features en improvements gemaakt op de
                            huidige applicatie.',
            'image' => 'img/logo/pti.svg',
            'alt_image' => 'Pincode Telenet',
            'types' => json_encode(['job']),
        ]);

//        DB::table('experience')->insert([
//            'id' => 5,
//            'title' => 'PHP Developer',
//            'period' => 'Juli 2018',
//            'stack' => json_encode(['PHP', 'Magento 1', 'Magento 2', 'CSS', 'HTML']),
//            'description' => 'Training in Magento 1 gevolgd en een aantal shops veiligheidsupgrades van Magento geïmplementeerd.',
//            'image' => 'img/logo/experius.jpg',
//            'alt_image' => 'Experius',
//            'types' => json_encode(['job']),
//        ]);

        DB::table('experience')->insert([
            'id' => 6,
            'title' => 'PHP Developer',
            'period' => 'November 2018 - Augustus 2019',
            'stack' => json_encode(['PHP', 'Laravel', 'Mysql', 'Git']),
            'description' => 'Verantwoordelijk voor het bouwen van diverse sites en webshops, met Laravel in de spotlight.
                            Mijn focus lag op de backend van de betreffende applicaties.',
            'image' => 'img/logo/ifresh.svg',
            'alt_image' => 'iFresh Software Development',
            'types' => json_encode(['job']),
        ]);

        DB::table('experience')->insert([
            'id' => 7,
            'title' => 'PHP Developer',
            'period' => 'Oktober 2019 - April 2020',
            'stack' => json_encode(['PHP', 'Yii', 'Mysql', 'SVN']),
            'description' => 'Ontwikkeling van een Online Afspraken omgeving op maat voor een grote klant. 
                              Daarnaast nieuwe features uitgedacht en tot realisatie gebracht in het standaard Online Afspraken systeem',
            'image' => 'img/logo/onlineafspraken.png',
            'alt_image' => 'Online Afspraken B.V.',
            'types' => json_encode(['job']),
        ]);


    }
}
