<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>Mariëlle van Dijk</title>
    <link rel="icon" href="img/avatar.png" type="image/png">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600'
          rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/magnific-popup.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>


</head>

<body data-spy="scroll" data-target="#main-nav-outer" data-offset="70">

<header class="header" id="header">
    <div class="container">
        <h1 class="animated fadeInDown delay-07s">Mariëlle van Dijk</h1>
        <ul class="animated fadeInUp delay-1s occupation">
            <li>PHP Developer</li>
        </ul>
        {{--<a class="link animated fadeInUp delay-1s servicelink" href="#werkervaring">Vertel mij meer!</a>--}}
    </div>
</header>

<nav id="main-nav-outer">
    <ul class="nav nav-pills main-nav">
        <li class="active"><a href="#werkervaring">Werkervaring</a></li>
        <li><a href="#opleidingen">Opleidingen</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#skillmatrix">Skillmatrix</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <a class="res-nav_click" href="#"><img class="hamburger" src="img/hamburger.png"></a>
</nav>

<section class="main-section" id="werkervaring">
    <div class="container">
        <h2>Werkervaring</h2>
        <div class="portfolioFilter">
            <ul class="Portfolio-nav wow fadeIn delay-02s">
                <li><a href="#" data-filter="*" class="current">Alles</a></li>
                <li><a href="#" data-filter=".job">Werkgevers</a></li>
                <li><a href="#" data-filter=".internship">Stages</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                <div class="portfolioContainer wow fadeInUp delay-04s">
                    {{-- @todo Make this non-static --}}
                    <div class="experience-box job backend frontend design">
                        <img src="img/logo/ifresh.svg" alt="iFresh Software Development">
                        <h3>PHP Developer</h3>
                        <h5>December 2018 - Juni 2019</h5>
                        <h6>Stack: <b>PHP</b>, <b>Laravel</b>, MySQL, Git</h6>
                        <p>Verantwoordelijk voor het bouwen van diverse sites en webshops, met Laravel in de spotlight.
                            Mijn focus lag op de backend van de betreffende applicaties.</p>
                    </div>
                    <div class="experience-box job backend frontend design">
                        <img src="img/logo/experius.jpg" alt="Experius">
                        <h3>PHP Developer</h3>
                        <h5>Juli 2018</h5>
                        <h6>Stack: <b>PHP</b>, Magento 1 & 2, Git</h6>
                        <p>Training in Magento 1 gevolgd en een aantal shops veiligheidsupgrades van Magento
                            geïmplementeerd.</p>
                    </div>
                    <div class="experience-box job backend frontend design">
                        <img src="img/logo/pti.svg" alt="Pincode Telenet">
                        <h3>PHP Developer</h3>
                        <h5>December 2017 - Maart 2018</h5>
                        <h6>Stack: <b>PHP</b>, Yii, Bootstrap, MySQL, Git</h6>
                        <p>Samen met het WOM ( Work Order Manager ) team nieuwe features en improvements gemaakt op de
                            huidige applicatie.</p>
                    </div>
                    <div class="experience-box internship backend frontend design">
                        <img src="img/logo/treshold.jpeg" alt="Treshold Automatisering">
                        <h3>Afstudeer Stage PHP Developer</h3>
                        <h5>November 2016 - April 2017</h5>
                        <h6>Stack: <b>PHP</b>, Shopware, ePages, Smarty</h6>
                        <p>Tijdens deze afstudeerstage ben ik verantwoordelijk geweest voor het bouwen van een nieuwe
                            webshop, hierbij ook het klantcontact afgehandeld en het design naar code vertaald.</p>
                    </div>
                    <div class="experience-box internship backend frontend design">
                        <img src="img/logo/heuvelman.jpg" alt="Heuvelman Sound & Vision">
                        <h3>Stage PHP Developer</h3>
                        <h5>Augustus 2015 - December 2015</h5>
                        <h6>Stack: <b>PHP</b>, HTML, CSS</h6>
                        <p>Deze stage omvatte het implementeren van design naar product voor de NS Servicewinkels op
                            grote stations. Daarnaast heb ik meeontwikkeld aan een applicatie voor Right to Play.
                        </p>
                    </div>
                    <div class="experience-box internship backend frontend design">
                        <img src="img/logo/designbase.png" alt="Designbase">
                        <h3>Eerstejaars Stage PHP Developer</h3>
                        <h5>Mei 2015 - Juli 2015</h5>
                        <h6>Stack: <b>PHP</b>, MODX, CSS, HTML</h6>
                        <p>Binnen Designbase heb ik meegewerkt aan diverse projecten, met een focus op het framework
                            MODX. Aan het eind van deze stage heb ik een plug-in
                            opgeleverd die het bedrijf van pas zou komen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-section gray" id="opleidingen">
    <div class="container">
        <div class="row-education">
            <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                <img src="img/books.png" alt="books" class="books">
            </figure>
            <div class="col-lg-7 col-sm-8 opleidingen">
                <h2 class="education-title">Opleidingen</h2>
                <div class="featured-box">
                    <div class="featured-box-col1 wow fadeInRight delay-02s">
                    </div>
                    <div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>MBO Utrecht - Media Developer Niveau 4</h3>
                        <h5>2014 - 2017</h5>
                        <p>Diploma behaald in September 2017, opleiding in 3 jaar versneld afgerond in plaats van 4
                            jaar.</p>
                    </div>
                </div>
                <div class="featured-box">
                    <div class="featured-box-col1 wow fadeInRight delay-04s">
                    </div>
                    <div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>O.R.S Lek & Linge HAVO/VWO Profiel Natuur & Techniek</h3>
                        <h5>2010 - 2014</h5>
                        <p>Vakkenpakket: Wiskunde B, Natuurkunde, Scheikunde, Informatica en Tekenen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-section paddind" style="height: 100%" id="portfolio">
    <div class="container">
        <h2>Portfolio</h2>
        <div class="portfolioFilter">
            <ul class="Portfolio-nav wow fadeIn delay-02s">
                <li><a href="#" data-filter="*" class="current">Alles</a></li>
                <li><a href="#" data-filter=".backend">Backend</a></li>
                <li><a href="#" data-filter=".frontend">Frontend</a></li>
                <li><a href="#" data-filter=".design">Design</a></li>
            </ul>
        </div>

    </div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
        {{-- Begin iFresh--}}
        <div class=" Portfolio-box backend frontend job internship">
            <img src="img/portfolio/altempo.jpeg" alt="Altempo Perduto">
            <p class="no-style-link">Geen publieke URL</p>
            <h3 class="Portfolio-item-title">Altempo Perduto</h3>
        </div>
        <div class="Portfolio-box backend job internship">
            <a href="https://shop.roundtable.nl/"><img src="img/portfolio/roundtable.png" alt="Roundtable Shop"></a>
            <p class="no-style-link"><a href="https://shop.roundtable.nl/">www.shop.roundtable.nl</a></p>
            <h3 class="Portfolio-item-title">Roundtable Shop</h3>
        </div>
        <div class=" Portfolio-box backend frontend job internship">
            <a href="https://bluecirclecasting.nl/"><img src="img/portfolio/bcc.png" alt="Blue Circle Casting"></a>
            <p class="no-style-link"><a href="https://bluecirclecasting.nl/">www.bluecirclecasting.nl</a></p>
            <h3 class="Portfolio-item-title">Blue Circle Casting</h3>
        </div>
        <div class=" Portfolio-box backend frontend job internship">
            <a href="http://jobs.fremantle.nl/"><img src="img/portfolio/fremantle.png" alt="Fremantle"></a>
            <p class="no-style-link"><a href="http://jobs.fremantle.nl/">www.jobs.fremantle.nl</a></p>
            <h3 class="Portfolio-item-title">Fremantle Jobs</h3>
        </div>
        <div class=" Portfolio-box backend frontend design job internship">
            <a href="https://wijschenkenwatermeteendoel.nl/"><img src="img/portfolio/water.png"
                                                                  alt="Wij schenken water met een doel"></a>
            <p class="no-style-link"><a
                        href="https://wijschenkenwatermeteendoel.nl/">www.wijschenkenwatermeteendoel.nl/</a></p>
            <h3 class="Portfolio-item-title">Wij schenken Water met een doel</h3>
        </div>
        <div class=" Portfolio-box backend frontend design job internship">
            <img src="img/portfolio/seval.png" alt="E-Cargo Manager">
            <p class="no-style-link">Geen publieke URL</p>
            <h3 class="Portfolio-item-title">E-Cargo Manager</h3>
        </div>
        {{-- Eind iFresh --}}
        {{-- Begin PTI --}}
        <div class=" Portfolio-box backend frontend job internship">
            <img src="img/portfolio/wom.png" alt="Work Order Manager">
            <p class="no-style-link">Geen publieke URL</p>
            <h3 class="Portfolio-item-title">Work Order Manager ( WOM )</h3>
        </div>
        {{-- Eind PTI --}}
        {{-- Begin Treshold --}}
        <div class=" Portfolio-box backend frontend design job internship">
            <a href="https://www.pbmexpress.nl/"><img src="img/portfolio/pbmexpress.png" alt="PBMExpress"></a>
            <p class="no-style-link"><a href="https://www.pbmexpress.nl/">www.pbmexpress.nl/</a></p>
            <h3 class="Portfolio-item-title">PBMExpress</h3>
        </div>
        <div class=" Portfolio-box backend job internship">
            <a href="https://www.motoport.nl/"><img src="img/portfolio/motoport.png" alt="Motoport"></a>
            <p class="no-style-link"><a href="https://www.motoport.nl/">www.motoport.nl/</a></p>
            <h3 class="Portfolio-item-title">Motoport</h3>
        </div>
        {{-- Eind Treshold --}}
        {{-- Begin Heuvelman --}}
        <div class=" Portfolio-box frontend job internship">
            <a href="img/portfolio/ns.png"><img src="img/portfolio/ns.png" alt="NS Servicewinkels"></a>
            <p class="no-style-link">Geen publieke URL</p>
            <h3 class="Portfolio-item-title">NS Servicewinkels</h3>
        </div>
        <div class=" Portfolio-box frontend job internship">
            <a href="img/portfolio/tusq.png"><img src="img/portfolio/tusq.png" alt="The Ultimate Sport Quiz"></a>
            <p class="no-style-link">Geen publieke URL</p>
            <h3 class="Portfolio-item-title">The Ultimate Sport Quiz</h3>
        </div>
        {{-- Eind Heuvelman --}}
    </div>
</section>

<section class="main-section gray" id="skillmatrix">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-8 skillmatrix">
                <h2>Skillmatrix</h2>
                {{-- Skillmatrix graph --}}
                <div id="containerGraph"></div>
            </div>
            <figure class="col-lg-5 wow fadeInRight">
                <img src="img/avatar.png" class="avatar-mirror" alt="avatar">
            </figure>
        </div>
    </div>
</section>

<section class="main-section about" id="about">
    <div class="container">
        <h2>About</h2>
        <div class="about-block">
            <div class="about-box">
                <div class="description-about wow fadeInDown delay-03s">
                    <p class="about-text">
                        Naast mijn liefde voor programmeren zou ik mijzelf beschrijven als een vurig karakter, levendig
                        en vol energie. Mijn hoofd zit altijd vol nieuwe ideeën en mogelijkheden. Een team player, maar
                        zelfstandig werken gaat mij ook goed af.
                    </p>
                    <p class="about-text">
                        Buiten werktijden ben ik te vinden achter (of voor?) de TV en mijn collectie aan games die ik
                        ooit nog wil spelen. Daarnaast ben ik iemand die de laatste techniek trends ontzettend
                        interessant vindt, en ben ik gek op gadgets.
                    </p>
                    <p class="about-text">
                        Wanneer ik buiten de deur ben, sta (of zit) ik bij concerten, met diverse genres. Van Metal tot
                        Klassiek, niets is te gek voor mij. Ook zou ik mijzelf een vaste klant van de plaatselijke
                        bioscoop noemen.
                    </p>
                </div>
                <h3 class="wow fadeInDown delay-03s"></h3>
                <span class="wow fadeInDown delay-03s"></span>
                <p class="wow fadeInDown delay-03s"></p>
            </div>
        </div>
    </div>
</section>

<section class="main-section contact" id="contact">
    <div class="row contactRow">
        <div class="col-lg-5 col-sm-4 wow fadeInLeft contact-left">
            <div class="contact-info-box address clearfix">
                <h3 class="label-icon"><i class="icon fa fa-map-marker"></i>Locatie:</h3>
                <span class="contact-text">Utrecht Leidsche Rijn en Omgeving</span>
            </div>
            <div class="contact-info-box email clearfix">
                <h3 class="label-icon"><i class="icon fa fa-pencil"></i>E-Mail:</h3>
                <span class="contact-text"><a
                            href="mailto:mariellevandijk98@outlook.com">mariellevandijk98@outlook.com</a></span>
            </div>
        </div>
        <div class="col-lg-5 col-sm-4 wow fadeInRight contact-right">
            <div class="contact-mid">
                <ul class="social-link">
                    <li class="github">
                        <a target="_blank" href="https://www.github.com/MariellevDijk">
                            <i class="fa fa-github"></i>
                        </a>
                    </li>
                    <li class="emailaddress">
                        <a href="mailto:mariellevandijk98@outlook.com">
                            <i class="fa fa-at"></i>
                        </a>
                    </li>
                    <li class="linkedin">
                        <a href="https://www.linkedin.com/in/mariellevdijk/" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/avatar.png" alt="Avatar"></a></div>
        <span class="copyright">&copy; Mariëlle van Dijk - 2019</span>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function (e) {

        $('.res-nav_click').click(function () {
            $('.main-nav').slideToggle();
            return false
        });

        $('.nav-item').click(function () {
            $('.main-nav').hide();
        });

        $('.Portfolio-box').magnificPopup({
            delegate: 'a',
            type: 'image'
        });

        setTimeout(updateScrollSpy, 1000);
    });

    function updateScrollSpy() {
        jQuery('[data-spy="scroll"]').each(function () {
            var $spy = jQuery(this).scrollspy('refresh')
        });
    }
</script>

<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>

<script type="text/javascript">
    $(window).load(function () {


        var $container = $('.portfolioContainer'),
            $body = $('body'),
            colW = 375,
            columns = null;


        $container.isotope({
            // disable window resizing
            resizable: true,
            masonry: {
                columnWidth: colW
            }
        });

        $(window).smartresize(function () {
            // check if columns has changed
            var currentColumns = Math.floor(($body.width() - 30) / colW);
            if (currentColumns !== columns) {
                // set new column count
                columns = currentColumns;
                // apply width to container manually, then trigger relayout
                $container.width(columns * colW)
                    .isotope('reLayout');
            }

        }).smartresize(); // trigger resize to set container width
        $('.portfolioFilter a').click(function () {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({

                filter: selector,
            });
            return false;
        });

    });
</script>

<script>
    var chart = Highcharts.chart('containerGraph', {
        title: {
            text: 'Ervaring in jaren'
        },
        exporting: {
            enabled: false
        },
        xAxis: {
            categories: [
                'HTML',
                'PHP',
                'MYSQL',
                'CSS',
                'LESS/SASS',
                'Bootstrap',
                'JSON',
                'jQuery',
                'Laravel',
                'Symfony',
                'Java',
                'JavaScript',
                'Python',
                'Node.JS',
                'Angular.JS',
                'Shopware',
                'Yii',
                'OOP',
                'Functional Documentation',
                'Agile',
                'Scrum'
            ]
        },
        series: [{
            type: 'column',
            colorByPoint: true,
            data: [4, 4, 3, 3, 2, 2, 2, 1, 1, 1, 1, 1, 1, 0.5, 0.5, 1, 0.5, 4, 2, 2, 2],
            showInLegend: false,
            name: 'Jaren',
        }],
        colors: [
            '#0033ab',
            '#9a3fa1',
            '#d9006f'
        ],
        chart: {
            inverted: true,
            polar: false,
            backgroundColor: '#fafafa'
        }
    });
</script>

<script>
    window.onscroll = function () {
        myFunction()
    };

    var navbar = document.getElementById("main-nav-outer");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>


</body>

</html>
