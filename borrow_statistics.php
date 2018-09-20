<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款报表统计</title>
</head>
 <!-- 引入bootstrap的css -->
 <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">

 <!-- 引入当前的样式 -->
 <link rel="stylesheet" href="./dist/css/minCss/borrow.min.css">
<body>
    <!-- 引入头部  -->
    <?php require_once('./header.php')?>  

    <!-- 引入导航  -->
    <?php require_once('./topNav.php')?> 

    <!-- 本页单独内容开始 -->
    <div class="container">

        <!-- 引入左侧内容 -->
        <?php require_once('./leftList.php') ?>

        <!-- 右侧内容 -->
        <div class="col-sm-9 col-xs-12" id="mainContent">
            <!-- <button type="button" id="btnOff" class="btn-primary btn-sm">隐藏</button> -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">借款类别及金额统计</h3>
                    </div>
                    <div class="panel-body">
                        <!-- 1. 为ECharts准备一个具备大小（宽高）的Dom -->    
                        <div id="mainBox" style="width:100%;height:500px"></div>
                    </div>
                </div>
            </div>
      
    </div>
    <!-- 本页单独内容结束 -->

    <!-- 引入echarts -->
    <script src="./lib/echarts/echarts-all.js"></script>

    <!-- 引入本页的js -->
    <script src="./dist/js/borrow_statistics.min.js"></script>

    <!-- 引入jQuery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap -->
    <script src="./lib/bootstrap/js/bootstrap.js"></script>
    <!-- 引入自己的js -->
    <script src="./dist/js/p2p.min.js"></script>
</body>
</html>