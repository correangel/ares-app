/**
 * Created by brodriguez on 02/11/16.
 */
$(function () {
    var categoryImg = {
        'Apples': '<img src="/htimg/htprofileimage_display/user/1.png">',
        'Oranges': '<img src="/htimg/htprofileimage_display/user/2.png">',
        'Pears': '<img src="/htimg/htprofileimage_display/user/3.png">',
        'Grapes': '<img src="/htimg/htprofileimage_display/user/4.png">',
        'Bananas': '<img src="/htimg/htprofileimage_display/user/5.png">'
    };

    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Stacked column chart'
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas'],
            labels: {
                x: 5,
                useHTML: true,
                formatter: function(){
                    return '<div class="myToolTip" tittle="Hello ' + this.value + ' ">' + categoryImg[this.value] + '</div>';
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total fruit consumption'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
        },
        series: [{
            name: 'John',
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Jane',
            data: [2, 2, 3, 2, 1]
        }]
    });
});