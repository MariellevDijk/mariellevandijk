<!doctype html>
<html>
<head>
    @include('includes.head')
</head>

<body data-spy="scroll" data-target="#main-nav-outer" data-offset="50">

@include('includes.header')

@include('includes.navigation')

@include('blocks.werkervaring')

@include('blocks.opleidingen')

@include('blocks.portfolio')

@include('blocks.skillmatrix')

@include('blocks.about')

@include('blocks.contact')

@include('includes.footer')

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

    $(window).ready(function () {
            var wow = new WOW({
                animateClass: 'animated',
                offset: 100,
                resetAnimation: false
            });
            wow.init();
        }
    )
</script>

<script>
    Highcharts.chart('containerGraph', {
        title: {
            text: 'Ervaring in jaren'
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Totale ervaring in jaren'
            }
        },
        xAxis: {
            categories: @json($skills['categories']),
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
            data: @json($skills['workingExperience'])
        }, {
            name: 'Studie',
            data: @json($skills['studyExperience'])
        }, {
            name: 'Autodidact',
            data: @json($skills['selfLearningExperience'])
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
