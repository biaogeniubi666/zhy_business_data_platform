<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>index</title>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="css/comon0.css">
<link rel="stylesheet" href="css/app.css">
</head>

<script>
  $(window).load(function(){  
              $(".loading").fadeOut()
            })  
      
  /****/
  $(document).ready(function(){
    var whei=$(window).width()
    $("html").css({fontSize:whei/20})
    $(window).resize(function(){
      var whei=$(window).width()
    $("html").css({fontSize:whei/20})
    });
  });
</script>
<script type="text/javascript" src="js/echarts.min.js"></script>  
<script language="JavaScript" src="js/js.js"></script> 
<script src="js/app.js"></script>

<body>
      <div class="canvas" style="opacity: .2">
        <iframe frameborder="0" src="js/index.html" style="width: 100%; height: 100%"></iframe>
        </div>
      <div class="loading">
        <div class="loadbox"> <img src="picture/loading.gif"> 页面加载中... </div>
      </div>

      <div class="head">
        <h1>综合院业务数据可视化平台</h1>
        <div class="weather">
          <img src="picture/weather.png"><span>多云转小雨</span><span id="showTime"></span>
        </div>
        <script>
          var t = null;
            t = setTimeout(time,1000);//開始运行
            function time()
            {
              clearTimeout(t);//清除定时器
              dt = new Date();
            var y=dt.getFullYear();
            var mt=dt.getMonth()+1;
            var day=dt.getDate();
              var h=dt.getHours();//获取时
              var m=dt.getMinutes();//获取分
              var s=dt.getSeconds();//获取秒
              document.getElementById("showTime").innerHTML = y+"年"+mt+"月"+day+"-"+h+"时"+m+"分"+s+"秒";
              t = setTimeout(time,1000); //设定定时器，循环运行     
            }
        </script>
      </div>

      <div class="mainbox">
        <ul class="clearfix">
          <li>
            <div class="boxall" style="height: 3.2rem">
              <div class="alltitle">行业类别</div>
              <div class="allnav" id="echart1"></div>
              <div class="boxfoot"></div>
            </div>
            <div class="boxall" style="height: 3.2rem">
              <div class="alltitle">地市业务</div>
              <div class="allnav" id="echart2"></div>
              <div class="boxfoot"></div>
            </div>
            <div class="boxall" style="height: 3.2rem">
              <div style="height:100%; width: 100%;">
              <div class="sy" id="fb1"></div>
              <div class="sy" id="fb2"></div>
              <div class="sy" id="fb3"></div>
              <div class="boxfoot">
            </div>
          </li>
          <li>
            <div class="bar">
              <div class="barbox">
                <ul class="clearfix">
                <li class="pulll_left counter">{{ $businessA }}</li>
                <li class="pulll_left counter">{{ $businessB }}</li>
                </ul>
              </div>
              <div class="barbox2">
                <ul class="clearfix">
                  <li class="pulll_left">2019年部门A值总量（万） </li>
                  <li class="pulll_left">2019年部门B值总量（万）</li>
                </ul>
              </div>
            </div>
            <div class="map">
              <div class="map1"><img src="picture/lbx.png"></div>
              <div class="map2"><img src="picture/jt.png"></div>
              <div class="map3"><img src="picture/map.png"></div>
              <div class="map4" id="map_1"></div>
            </div>
          </li>
          <li>
            <div class="boxall" style="height:3.4rem">
              <div class="alltitle">温湿度变化趋势</div>
              <div class="allnav" id="echart4"></div>
              <div class="boxfoot"></div>
            </div>
            <div class="boxall" style="height: 3.2rem">
              <div class="alltitle">核心业务数据（万元）</div>
                
                <div class="bar2">
                  <div class="barbox3">
                    <ul class="clearfix">
                        <li class="pulll_left counter">{{ $tmp }}</li>
                        <li class="pulll_left counter">{{ $hum }}</li>
                        <li class="pulll_left counter">{{ $aft }}</li>
                        <li class="pulll_left counter">{{ $co2 }}</li>
                    </ul>
                  </div>
                  <div class="barbox4">
                    <ul class="clearfix">
                      <li class="pulll_left">总利润</li>
                      <li class="pulll_left">收支差</li>
                      <li class="pulll_left">自做业务量</li>
                      <li class="pulll_left">自做业务比例</li>
                    </ul>
                  </div>
                </div>

                <div class="bar2">
                    <div class="barbox3">
                      <ul class="clearfix">
                          <li class="pulll_left counter" id="tmp"></li>
                          <li class="pulll_left counter" id="hum"></li>
                          <li class="pulll_left counter" id="hum1"></li>
                          <li class="pulll_left counter" id="co2"></li>
                      </ul>
                    </div>
                    <div class="barbox4">
                      <ul class="clearfix">
                        <li class="pulll_left">回款 </li>
                        <li class="pulll_left">回款比例</li>
                        <li class="pulll_left">缺口金额</li>
                        <li class="pulll_left">缺口比例</li>
                      </ul>
                    </div>
                </div>

                
              <div class="boxfoot"></div>
            </div>
            <div class="boxall" style="height: 3rem">
              <div class="alltitle">模块标题样式6</div>
              <div class="allnav" id="echart6"></div>
              <div class="boxfoot"></div>
            </div>
          </li>
        </ul>
      </div>

      <div class="back"></div>

      <script type="text/javascript" src="js/china.js"></script> 
  <script type="text/javascript" src="js/area_echarts.js"></script> 
</body>
            
</html>
