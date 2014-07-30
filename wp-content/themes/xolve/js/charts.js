$(function () {

    var windowHeight = jQuery(window).height();
    var navbarHeight = windowHeight * 0.10;
    var windowWidth = jQuery(window).width();

    var $window = $(window),
        didScroll = false,
        chartScrolled = false,
        skillsTop = $('#skillset').offset().top - navbarHeight;

    $window.on('scroll', function () {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            didScroll = false;
            if ($window.scrollTop() >= skillsTop) {
                if (chartScrolled == false){
                   
                        createChart(x,y);
                }
            }
        }
    }, 0);

     function createChart(arrayOne, arrayTwo) {
       // $window.off('scroll');
        $('.chart-box').highcharts({
            chart: {
                type: 'bar'
            },
             title: {
                text: null
            },      
            xAxis: {
                categories: arrayOne
            },
            yAxis: {
                min: 0,
                max: 10,

                title: {
                    text: null,
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                enabled: false
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: false
                    }
                }
            },
            legend: {
                enabled: false
            }, 
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            },        
            series: [ {     
                data: arrayTwo
            }]
        });
        chartScrolled = true;
      
    };

    });

