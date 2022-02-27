var dom = document.getElementById("grafico");
var myChart = echarts.init(dom);
var app = {};
option = null;
option = {
    backgroundColor: '',
    visualMap: {
        show: false,
        min: 80,
        max: 600,
        inRange: {
            colorLightness: [0, 1]
        }
    },
    series : [
        {
            name: 'fonte de acesso',
            type: 'pie',
            radius: '55%',
            data:[
                {value:235, name:'Roubos a Resdencia 2015'},
                {value:274, name:'Roubos a Resdencia 2016'},
                {value:310, name:'Roubos a Resdencia 2017'},
                {value:335, name:'Roubos a Resdencia 2018'},
                {value:400, name:'Roubos a Resdencia 2019'}
            ],
            roseType: 'angle',
            label: {
                normal: {
                    textStyle: {
                        color: 'rgba(255, 255, 255, 0.9)'
                    }
                }
            },
            labelLine: {
                normal: {
                    lineStyle: {
                        color: 'rgba(255, 255, 255, 0.3)'
                    }
                }
            },
            itemStyle: {
                normal: {
                    color: 'blue',
                    shadowBlur: 200,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
};;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}