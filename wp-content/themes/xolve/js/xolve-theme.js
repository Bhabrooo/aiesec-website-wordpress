Highcharts.theme = {
    colors: ['#007fc6', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', 
             '#FF9655', '#FFF263', '#6AF9C4'],
    chart: {
        backgroundColor: '#f0f6fa'
    },
    xAxis: {
        labels: {
            style: {
                color: '#616161',
                fontSize: '2em',
                fontWeight: 'bold'
            },
            formatter: function () {
                return this.value;
            }
        },

    },
    plotOptions: {
    bar: {
        states: {
            hover: {
                color: '#007fc6'                                                           
            }
        }
    }
}

};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);