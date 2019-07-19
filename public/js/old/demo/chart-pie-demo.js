// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


// Pie Chart Example
function zhe([data1,data2,data3,data4,data5]){
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["ruodian", "chuantou", "zhihuichengshi", "wurenji", "qita"],
      datasets: [{
        // data: [10, 10, 80],
        data: [data1,data2,data3,data4,data5],
        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc' , '#CD2626' , '#CDCD00'],
        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
      },
      legend: {
        display: false
      },
      cutoutPercentage: 80,
    },
  });

}
// zhe([1,2,3,4,5]);

function initAjax(){
  $.ajax({
      url:'/types_of_industry',
      dataType:'json',
      type:'get',
      success:function([data1,data2,data3,data4,data5]){ //data一定要是这样的[820, 932, 901, 934, 1290, 1330, 1320]
        console.log([data1,data2,data3,data4,data5]);
        zhe([data1,data2,data3,data4,data5])
        // zhe([820, 932, 901, 934, 1290, 1330, 1320])
      }
  })
}
initAjax();
