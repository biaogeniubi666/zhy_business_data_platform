
// 基于准备好的dom，初始化echarts实例
var myChart = echarts.init(document.getElementById('mainbar1') ,'light');



// 指定图表的配置项和数据
var option = {
    textStyle:{
        color:'#4e73df',
    },
    xAxis: {
        data: ["1","2","3","4","5","6"]

    },
    
    yAxis: {},

    series: [
        {
        name: 'A值',
        type: 'bar',
        data: [5, 1, 2, 30, 5, 4],
        },
        {
            name: 'B值',
            type: 'bar',
            data: [15, 4, 21, 10, 9, 8],
            },

    
    ],

    grid:{
        x:"15%",
        y:"5%",
        x2:"5%",
        y2:"15%",
        height:'80%',
        width:'80%',
        },

   
};


// 使用刚指定的配置项和数据显示图表。
myChart.setOption(option);

window.addEventListener('resize', function () {
    myChart.resize();
});