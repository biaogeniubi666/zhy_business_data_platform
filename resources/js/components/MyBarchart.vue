
<template>
    <div class="card-body-sytle1 border-bottom-primary  shadow  text-gray-200">
            3
        <div id="main1">
    </div>
</template>



<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },

    function() {
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main1') , 'walden');

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: 'ECharts'
        },
        tooltip: {},
        legend: {
            data:['销量']
        },
        xAxis: {
            data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
        },
        yAxis: {},

        grid: {
            left: 100,
            right: 100,
        },

        series: [{
            name: '销量',
            type: 'bar',
            data: [5, 20, 36, 10, 10, 20]
        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);

    },

}
</script>
