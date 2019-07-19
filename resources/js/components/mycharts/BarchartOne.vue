<template>
    <div id='barechart' ref='chart1'>
    </div>
</template>

<script>
export default {
    methods: {
        barechart1() {
                // 基于准备好的dom，初始化echarts实例
                // var myChart = echarts.init(document.getElementById('barechart1'));
                var barechart = this.$refs.chart1;
                let myChart = this.$echarts.init('barechart');

                option = {
                    //  backgroundColor: '#00265f',
                    tooltip: {
                        trigger: 'axis',
                        axisPointer: {
                            type: 'shadow'
                        }
                    },
                    grid: {
                        left: '0%',
                        top:'10px',
                        right: '0%',
                        bottom: '4%',
                    containLabel: true
                    },
                    xAxis: [{
                        type: 'category',
                            data: ['1', '2', '3', '智慧城市', '其他'],
                        axisLine: {
                            show: true,
                        lineStyle: {
                                color: "rgba(255,255,255,.1)",
                                width: 1,
                                type: "solid"
                            },
                        },
                        
                        axisTick: {
                            show: false,
                        },
                        axisLabel:  {
                                interval: 0,
                            // rotate:50,
                                show: true,
                                splitNumber: 15,
                                textStyle: {
                                    color: "rgba(255,255,255,.6)",
                                    fontSize: '12',
                                },
                            },
                    }],
                    yAxis: [{
                        type: 'value',
                        axisLabel: {
                        //formatter: '{value} %'
                            show:true,
                            textStyle: {
                                    color: "rgba(255,255,255,.6)",
                                    fontSize: '12',
                                },
                        },
                        axisTick: {
                            show: false,
                        },
                        axisLine: {
                            show: true,
                            lineStyle: {
                                color: "rgba(255,255,255,.1	)",
                                width: 1,
                                type: "solid"
                            },
                        },
                        splitLine: {
                            lineStyle: {
                            color: "rgba(255,255,255,.1)",
                            }
                        }
                    }],
                    series: [
                    {
                        type: 'bar',
                        data: [200, 300, 300, 900, 1500],
                        barWidth:'35%', //柱子宽度
                        // barGap: 1, //柱子之间间距
                        itemStyle: {
                            normal: {
                                color:'#2f89cf',
                                opacity: 1,
                                barBorderRadius: 5,
                            }
                        }
                    }],
                };
            
                // 使用刚指定的配置项和数据显示图表。
                myChart.setOption(option);
                window.addEventListener("resize",function(){
                    myChart.resize();
                });
        }
    },
    created(){
            //自动加载indexs方法
            this.barechart1();
    },
    mounted() {
        console.log('Component mounted.');
        this.barechart1();
    },
}
    // $(function () {
    // barechart1();
        
    // })

</script>