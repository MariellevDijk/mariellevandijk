<!doctype html>
<html>
<head>
    @include('includes.head')
</head>

<body data-spy="scroll" data-target="#main-nav-outer" data-offset="70">

@include('includes.header')
@include('includes.navigation')

@include('blocks.werkervaring')

@include('blocks.opleidingen')

<section class="main-section paddind" style="height: 100%" id="portfolio">
    <div class="container">
        <h2>Portfolio</h2>
        <div class="portfolioFilter">
            <ul class="Portfolio-nav wow fadeIn delay-02s">
                <li><a href="#" data-filter-portfolio="*" class="current-portfolio">Alles</a></li>
                <li><a href="#" data-filter-portfolio=".backend">Backend</a></li>
                <li><a href="#" data-filter-portfolio=".frontend">Frontend</a></li>
                <li><a href="#" data-filter-portfolio=".design">Design</a></li>
            </ul>
        </div>

    </div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
        {{-- Begin iFresh--}}
        <div class=" Portfolio-box backend frontend">
            <img src="img/portfolio/altempo.jpeg" alt="Altempo Perduto">
            <p class="no-style-link">Geen publieke URL</p>
            <h3 class="Portfolio-item-title">Altempo Perduto</h3>
        </div>
        <div class="Portfolio-box backend">
            <a href="https://shop.roundtable.nl/"><img src="img/portfolio/roundtable.png" alt="Roundtable Shop"></a>
            <p class="no-style-link"><a href="https://shop.roundtable.nl/">www.shop.roundtable.nl</a></p>
            <h3 class="Portfolio-item-title">Roundtable Shop</h3>
        </div>
        <div class=" Portfolio-box backend frontend">
            <a href="https://bluecirclecasting.nl/"><img src="img/portfolio/bcc.png" alt="Blue Circle Casting"></a>
            <p class="no-style-link"><a href="https://bluecirclecasting.nl/">www.bluecirclecasting.nl</a></p>
            <h3 class="Portfolio-item-title">Blue Circle Casting</h3>
        </div>
        <div class=" Portfolio-box backend frontend">
            <a href="http://jobs.fremantle.nl/"><img src="img/portfolio/fremantle.png" alt="Fremantle"></a>
            <p class="no-style-link"><a href="http://jobs.fremantle.nl/">www.jobs.fremantle.nl</a></p>
            <h3 class="Portfolio-item-title">Fremantle Jobs</h3>
        </div>
        <div class=" Portfolio-box backend frontend design">
            <a href="https://wijschenkenwatermeteendoel.nl/"><img src="img/portfolio/water.png"
                                                                  alt="Wij schenken water met een doel"></a>
            <p class="no-style-link"><a
                        href="https://wijschenkenwatermeteendoel.nl/">www.wijschenkenwatermeteendoel.nl/</a></p>
            <h3 class="Portfolio-item-title">Wij schenken Water met een doel</h3>
        </div>
        <div class=" Portfolio-box backend frontend design">
            <img src="img/portfolio/seval.png" alt="E-Cargo Manager">
            <p class="no-style-link">Geen publieke URL</p>
            <h3 class="Portfolio-item-title">E-Cargo Manager</h3>
        </div>
        {{-- Eind iFresh --}}
        {{-- Begin PTI --}}
        <div class=" Portfolio-box backend frontend ">
            <img src="img/portfolio/wom.png" alt="Work Order Manager">
            <p class="no-style-link">Geen publieke URL</p>
            <h3 class="Portfolio-item-title">Work Order Manager ( WOM )</h3>
        </div>
        {{-- Eind PTI --}}
        {{-- Begin Treshold --}}
        <div class=" Portfolio-box backend frontend design">
            <a href="https://www.pbmexpress.nl/"><img src="img/portfolio/pbmexpress.png" alt="PBMExpress"></a>
            <p class="no-style-link"><a href="https://www.pbmexpress.nl/">www.pbmexpress.nl/</a></p>
            <h3 class="Portfolio-item-title">PBMExpress</h3>
        </div>
        <div class=" Portfolio-box backend">
            <a href="https://www.motoport.nl/"><img src="img/portfolio/motoport.png" alt="Motoport"></a>
            <p class="no-style-link"><a href="https://www.motoport.nl/">www.motoport.nl/</a></p>
            <h3 class="Portfolio-item-title">Motoport</h3>
        </div>
        {{-- Eind Treshold --}}
        {{-- Begin Heuvelman --}}
        <div class=" Portfolio-box frontend">
            <a href="img/portfolio/ns.png"><img src="img/portfolio/ns.png" alt="NS Servicewinkels"></a>
            <p class="no-style-link">Geen publieke URL</p>
            <h3 class="Portfolio-item-title">NS Servicewinkels</h3>
        </div>
        <div class=" Portfolio-box frontend">
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
        <h2>Over mij</h2>
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

<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>

<script type="text/javascript">
    $(window).load(function () {
        var $container = $('.portfolioContainer');
        var $container1 = $('.experienceContainer');

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

        $container1.isotope({
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
                $container1.width(columns * colW)
                    .isotope('reLayout');
            }

        }).smartresize(); // trigger resize to set container width

        $('.portfolioFilter a').click(function () {
            $('.portfolioFilter .current-portfolio').removeClass('current-portfolio');
            $(this).addClass('current-portfolio');

            var selector = $(this).attr('data-filter-portfolio');
            $container.isotope({

                filter: selector,
            });
            return false;
        });

        $('.experienceFilter a').click(function () {
            $('.experienceFilter .current-experience').removeClass('current-experience');
            $(this).addClass('current-experience');

            var selector1 = $(this).attr('data-filter-experience');
            $container1.isotope({

                filter: selector1,
            });
            return false;
        });

    });
</script>

<script>
    Highcharts.chart('containerGraph', {
        title: {
            text: 'Ervaring in jaren'
        },
        xAxis: {
            categories:
                ['HTML',
            'PHP',
            'MYSQL',
            'CSS',
            'LESS/SASS',
            'Bootstrap',
            'JSON',
            'jQuery',
            'Laravel',
            'Symfony',
            'JavaScript',
            'Node.JS',
            'Angular.JS',
            'Yii',
            'OOP',
            'Functional Documentation',
            'Agile',
            'Scrum']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Totale ervaring in jaren'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Werkervaring',
            data: [1.5, 1.5, 1.5, 1.5, 1, 1, 1, 1, 0.2, 1, 0, 0, 0.5, 1.5, 0.5, 1.5, 1.5, 1.5]
        }, {
            name: 'Studie',
            data: [2, 2, 2, 2, 1, 2, 0.5, 0.5, 0, 0, 0.5, 0.5, 0, 0, 2, 2, 0, 0]
        }, {
            name: 'Autodidact',
            data: [1, 1, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.2, 0, 0, 0, 0.2, 2, 0.5, 0.5]
        }],
        colors: [
            '#0033ab',
            '#9a3fa1',
            '#d9006f'
        ],
        chart: {
            polar: false,
            backgroundColor: '#fafafa',
            type: 'bar'
        },
        exporting: {
            enabled: false
        },
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
