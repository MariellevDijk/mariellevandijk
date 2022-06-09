require('jquery');
require('jquery-migrate');
require('popper.js');
require('bootstrap');
require('particles.js');
require('tiny-swiper');


require('magnific-popup');
require('waypoints/src/waypoint')
require('jquery.counterup');


require('scrollit');
require('active');
require('highcharts');

/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'assets/particles.json', function() {
  console.log('callback - particles.js config loaded');
});
*/
particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 60,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 5
            },
            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": false,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 2,
            "direction": "top",
            "random": true,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": false,
                "mode": "grab"
            },
            "onclick": {
                "enable": false,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 140,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
});

import Highcharts from 'highcharts/highcharts';
import Swiper from 'tiny-swiper';

window.Highcharts = Highcharts;
$('#werkgevers').on('click', function () {
    $('.job').show();
    $('.internship').hide();
});

$('#internship').on('click', function () {
    $('.internship').show();
    $('.job').hide();
});

$('#all').on('click', function () {
    $('.job').show();
    $('.internship').show();
});

Highcharts.chart('containerGraph', {
    title: {
        text: 'Ervaring in jaren / Experience in years',
        style: {
            color: '#ffffff',
            fontSize: '30px',
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Totale ervaring in jaren / Total experience in years',
            style: {
                color: '#ffffff',
            }
        },
    },
    xAxis: {
        categories: window.categories,
        labels: {
            style: {
                color: '#ffffff'
            }
        }
    },
    legend: {
        reversed: true,
        itemStyle: {
            fontSize: '15px',
            color: '#ffffff',
        },
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        },
        plotOptions: {
            borderWidth: 0,
        }
    },
    series: [{
        name: 'Werkervaring/Professional Experience',
        data: window.workingExperience,
        style: {
            color: '#fff',
        }
    }, {
        name: 'Studie/Education',
        data: window.studyExperience,
        style: {
            color: '#fff',
        }
    }, {
        name: 'Autodidact/Self-taught',
        data: window.selfLearningExperience,
        style: {
            color: '#fff',
        }
    }],
    colors: [
        '#0b379a',
        '#833e88',
        '#ab0d5e'
    ],
    chart: {
        polar: false,
        backgroundColor: 'none',
        type: 'bar',
        borderWidth: 0,
    },
    exporting: {
        enabled: false
    },
    credits: {
        text: 'Marielle.DEV',
    },
});
