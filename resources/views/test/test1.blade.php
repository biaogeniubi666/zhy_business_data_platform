<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/test1.css">
</head>
<body>

    <div class="box">
        <div class="box_wheel">
            <ul class="box_ul">
                <li style="background: pink;">AAA</li>
                <li style="background: red;">BBB</li>
                <li style="background: orange;">CCC</li>
                <li style="background: brown;">DDD</li>					
            </ul>
        </div>
        <div class="btn btn_left"><</div>
        <div class="btn btn_right">></div>
    </div>
</body>

<script type="text/javascript">
    //li元素的宽（包括padding，margin，border）
    var liW = $('.box_ul li').outerWidth(true)
    var len = $('.box_ul li').length
    $('.box_ul').css("width",liW*len)
    var flag = true
    $(".btn_left").click(function(){
        if(flag){
            flag = false
            $('.box_ul').find("li").eq(len-1).prependTo($('.box_ul'))
            $('.box_ul').css({"marginLeft":-liW}).delay(8).queue(function(){
                $('.box_ul').animate({"marginLeft":0})
                flag = true
                $(this).dequeue();
            })
        }
    })
    
    $(".btn_right").click(function(){
        if(flag){
            flag = false
            $('.box_ul').animate({"marginLeft":-liW}).delay(8).queue(function(){
                $('.box_ul').find("li").eq(0).appendTo($('.box_ul'))
                $('.box_ul').css({"marginLeft":0})
                flag = true
                $(this).dequeue();
            })
        }
    })
</script>
</html>
