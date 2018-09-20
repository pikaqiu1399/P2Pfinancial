<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
 <!-- 引入公共css -->
 <link rel="stylesheet" href="./dist/css/minCss/topNav.min.css">
<body>
    <div class="panel panel-default topNavList">
        <div class="container">
            <div class="panel-body">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="./images/logo.png">
                    </a>
                </div>
                <ul class="nav navbar-nav" id="mainMenu">
                    <li role="presentation" class="active"><a href="./index.php?menuid=1" >首页</a></li>
                    <li role="presentation"><a href="./invest.php?menuid=2">我要投资</a></li>
                    <li role="presentation"><a href="./borrow.php?menuid=3">我要借款</a></li>
                    <li role="presentation"><a href="./personal.php?menuid=4">个人中心</a></li>
                    <li role="presentation"><a href="#">新手指导</a></li>
                    <li role="presentation"><a href="#" >关于我们</a></li>
                </ul>
        </div>  
    </div>
</div>
<script src="./lib/jquery/jquery.min.js"></script>
<script>
//获取地址
var reqUrl=location.href;
// 获取id
var menuid=reqUrl.split('=')[1];
// console.log(menuid);
$("#mainMenu li").eq(menuid-1).addClass("active").siblings("li").removeClass("active");
</script>
</body>
</html>