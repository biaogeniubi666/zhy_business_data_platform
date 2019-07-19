//广东地图开始-------------------------------------
function chart2() {
    var data = [
        {
            name: '广州市',
            value: 120057.34
            },
        {
            name: '韶关市',
            value: 15477.48
            },
        {
            name: '深圳市',
            value: 131686.1
            },
        {
            name: '珠海市',
            value: 6992.6
            },
        {
            name: '汕头市',
            value: 44045.49
            },
        {
            name: '佛山市',
            value: 40689.64
            },
        {
            name: '江门市',
            value: 37659.78
            },
        {
            name: '湛江市',
            value: 45180.97
            },
        {
            name: '茂名市',
            value: 5204.26
            },
        {
            name: '肇庆市',
            value: 21900.9
            },
        {
            name: '惠州市',
            value: 4918.26
            },
        {
            name: '梅州市',
            value: 5881.84
            },
        {
            name: '汕尾市',
            value: 4178.01
            },
        {
            name: '河源市',
            value: 2227.92
            },
        {
            name: '阳江市',
            value: 2180.98
            },
        {
            name: '清远市',
            value: 9172.94
            },
        {
            name: '东莞市',
            value: 3368
            },
        {
            name: '中山市',
            value: 306.98
            },
        {
            name: '潮州市',
            value: 810.66
            },
        {
            name: '揭阳市',
            value: 542.2
            },
        {
            name: '云浮市',
            value: 256.38
            }
        ]

    var myChart = echarts.init(document.getElementById('gdMap'));
    // var myCharts = echarts.init(document.getElementById('gdMaps'));

    

    var yMax = 0;
    for (var j = 0; j < data.length; j++) {
        if (yMax < data[j].value) {
            yMax = data[j].value;
        }
    }
        // myChart.hideLoading();
        // myCharts.hideLoading();
    var option = {
            animation: true,
            tooltip: {
                show: true
            },
            visualMap: {
                min: 0,
                max: yMax,
                text: ['高', '低'],
                orient: 'horizontal',
                itemWidth: 15,
                itemHeight: 200,
                right: 0,
                bottom: 30,
                inRange: {
                    color: ['#75ddff', '#0e94eb']
                },
                textStyle: {
                    color: 'white'
                }
            },
            series: [
                {
                    name: '数据名称',
                    type: 'map',
                    mapType: '广东',
                    // selectedMode: 'multiple',
                    tooltip: {
                        trigger: 'item',
                        formatter: '{b}<br/>{c} (件)'
                    },
                    itemStyle: {
                        normal: {
                            borderWidth: 1,
                            borderColor: '#0e94eb',
                            label: {
                                show: false
                            }
                        },
                        emphasis: { // 也是选中样式
                            borderWidth: 1,
                            borderColor: '#fff',
                            backgroundColor: 'red',
                            label: {
                                show: true,
                                textStyle: {
                                    color: '#fff'
                                }
                            }
                        }
                    },
                    data: data,
            }
            ]
        };
    myChart.setOption(option); 
// myCharts.setOption(option);

window.addEventListener('resize', function () {
    myChart.resize();
    // myCharts.resize();
    });
}
chart2();
//广东地图结束-------------------------------------