$(function () {

    var $window = $(window),
        didScroll = false,
        chartScrolled = false,
        skillsTop = $('#skillset').offset().top - 40;

    $window.on('scroll', function () {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            didScroll = false;
            if ($window.scrollTop() >= skillsTop) {
                if (chartScrolled == false){
                    createChart();
                }
            }
        }
    }, 300);


     function createChart() {
       // $window.off('scroll');
        $('.chart-box').highcharts({
            chart: {
                type: 'bar'
            },
             title: {
                text: null
            },
        
            xAxis: {
                categories: ['Javascript', 'SQL', 'PHP', 'RoR', 'Others'],

            },
            yAxis: {
                min: 0,
                max: 100,

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
               
                data: [100, 88, 99, 70, 60]
            }]
        });
        chartScrolled = true;
      
    };

});