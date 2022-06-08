<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio')->insert(
            [
                'id' => 1,
                'title' => 'The Ultimate Sport Quiz',
                'url' => '',
                'text_url' => '',
                'image' => 'img/portfolio//tusq.png',
                'alt_image' => 'The Ultimate Sport Quiz',
                'stack' => 'HTML, CSS, PHP, MySQL',
                'types' => json_encode(['frontend']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 2,
                'title' => 'NS Servicewinkels',
                'url' => '',
                'text_url' => '',
                'image' => 'img/portfolio/ns.png',
                'alt_image' => 'NS Servicewinkels',
                'stack' => 'HTML, CSS, PHP, MySQL',
                'types' => json_encode(['frontend']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 3,
                'title' => 'Motoport',
                'url' => 'https://www.motoport.nl/',
                'text_url' => 'Website: Motoport.nl',
                'image' => 'img/portfolio/motoport.png',
                'alt_image' => 'Motoport',
                'stack' => 'Shopware, Smarty, Less, PHP, MySQL',
                'types' => json_encode(['backend']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 4,
                'title' => 'PBMExpress',
                'url' => 'https://www.pbmexpress.nl/',
                'text_url' => 'Website: PBMExpress.nl',
                'image' => 'img/portfolio/pbmexpress.png',
                'alt_image' => 'PBMExpress',
                'stack' => 'Shopware, Smarty, Less, PHP, MySQL',
                'types' => json_encode(['backend', 'frontend', 'design']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 5,
                'title' => 'Work Order Manager ( WOM )',
                'url' => '',
                'text_url' => '',
                'image' => 'img/portfolio/wom.png',
                'alt_image' => 'Work Order Manager',
                'stack' => 'Yii, PHP, MySQL, Gearman, Git',
                'types' => json_encode(['backend', 'frontend']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 7,
                'title' => 'Wij schenken Water met een doel',
                'url' => 'https://wijschenkenwatermeteendoel.nl/',
                'text_url' => 'Website: Wij schenken water met een doel',
                'image' => 'img/portfolio/water.png',
                'alt_image' => 'Wij schenken water met een doel',
                'stack' => 'Laravel, Sass, PHP, FileMaker, Git, Bootstrap',
                'types' => json_encode(['frontend', 'backend', 'design']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 8,
                'title' => 'Fremantle Jobs',
                'url' => 'https://jobs.fremantle.nl/',
                'text_url' => 'Website: Fremantle Jobs',
                'image' => 'img/portfolio/fremantle.png',
                'alt_image' => 'Fremantle Jobs',
                'stack' => 'Laravel, Sass, PHP, FileMaker, Git,Bootstrap',
                'types' => json_encode(['frontend', 'backend']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 9,
                'title' => 'Blue Circle Casting',
                'url' => 'https://bluecirclecasting.nl/',
                'text_url' => 'Website: Blue Circle Casting',
                'image' => 'img/portfolio/bcc.png',
                'alt_image' => 'Blue Circle Casting',
                'stack' => 'Laravel, Sass, PHP, FileMaker, Git, Bootstrap',
                'types' => json_encode(['frontend', 'backend']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 10,
                'title' => 'Roundtable Shop',
                'url' => 'https://shop.roundtable.nl/',
                'text_url' => 'Website: Roundtable Shop',
                'image' => 'img/portfolio/roundtable.png',
                'alt_image' => 'Roundtable Shop',
                'stack' => 'Laravel, Sass, PHP, FileMaker, Git, Bootstrap',
                'types' => json_encode(['backend']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 11,
                'title' => 'Altempo Perduto',
                'url' => 'https://booking.altempoperduto.com/',
                'text_url' => 'Website: Altempo perduto',
                'image' => 'img/portfolio/altempo.jpeg',
                'alt_image' => 'Altempo Perduto',
                'stack' => 'Laravel, Sass, PHP, FileMaker, Git, Bootstrap',
                'types' => json_encode(['backend', 'frontend']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 12,
                'title' => 'Online Afspraken systeem',
                'url' => 'https://www.onlineafspraken.nl/',
                'text_url' => 'Website: Online Afspraken',
                'image' => 'img/portfolio/oa.png',
                'alt_image' => 'Online Afspraken',
                'stack' => 'Yii, CSS, Bootstrap, PHP, MySQL, SVN',
                'types' => json_encode(['backend', 'frontend']),
            ]
        );

        DB::table('portfolio')->insert(
            [
                'id' => 13,
                'title' => 'FoodTicket OrderBuddy',
                'url' => 'https://www.foodticket.nl/',
                'text_url' => 'Website: Food Ticket',
                'image' => 'img/portfolio/foodticket.png',
                'alt_image' => 'FoodTicket',
                'stack' => 'Laravel, PHP, MySQL, AWS, BitBucket',
                'types' => json_encode(['backend', 'frontend']),
            ]
        );
    }
}
