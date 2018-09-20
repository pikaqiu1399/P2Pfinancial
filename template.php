<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户登录</title>
</head>
 <!-- 引入bootstrap的css -->
 <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">

 <!-- 引入当前的样式 -->
 <link rel="stylesheet" href="./dist/css/minCss/template.min.css">
<body>
    <!-- 引入头部  -->
    <?php require_once('./header.php')?>  

    <!-- 引入导航  -->
    <?php require_once('./topNav.php')?> 

    <!-- 本页单独内容开始 -->
    <div class="container">
        当前页面的内容
    </div>
    <!-- 本页单独内容结束 -->
    
    <!-- 引入尾部  -->
    <?php require_once('./footer.php')?>   

    <!-- 引入jQuery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap -->
    <script src="./lib/bootstrap/js/bootstrap.js"></script>
    <!-- 引入自己的js -->
    <script src="./dist/js/p2p.min.js"></script>
</body>
</html>