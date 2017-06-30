<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>(┬＿┬)好像出错了呢</title>
    <base href="{{url('')}}/admin/" />
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">


<div class="middle-box text-center animated fadeInDown" style="text-align: center" >
    <h1 style="font-size: 150px">┬＿┬</h1>
    <br />
    <h2 class="font-bold">{{$errorMsg}}</h2>
    <h2>将于&nbsp; <span id="gotime" style="font-size: 125%;color: red">4</span> &nbsp;秒后跳转，<a href="{{url($locationUrl)}}">手动跳转</a></h2>
    <div class="error-desc">
    </div>
</div>

<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>

<script>
{{--    alert("{{$errorMsg}}");--}}
    var num = $('#gotime').html();
    function gogo(){
        if(num != 1){
            num = num-1;
            $('#gotime').html(num);
        }else{
            location.href="{{url($locationUrl)}}";
        }
        setTimeout("gogo()",1000);
    }
    gogo();
</script>


</body>

</html>
