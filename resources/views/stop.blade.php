<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>(┬＿┬)网站暂时关闭了</title>
    <base href="{{url('')}}/admin/">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">


    <div class="middle-box text-center animated fadeInDown">
        <h1 style="font-size: 1200%">┬＿┬</h1>
        <br >
        <br/>
        <br/>
        <h3 class="font-bold">→我们的网站由于不可抗拒的力量暂时关闭了←</h3>
        <br/><br/>
        <div class="error-desc">
            服务器好像出错了...
            <br/>
            很抱歉给您带来这次糟糕的体验
            <br/>
            网站的开启时间是：<?php echo file_get_contents(config_path('stop.lock'))?>
            <br/>
        </div>
    </div>

    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>

    
    

</body>

</html>
