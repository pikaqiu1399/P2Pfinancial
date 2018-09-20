<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>

    <!-- 引入bootstrap的css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <!-- 引入当前页面的css -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>
<body>

  <!-- 引入头部  -->
  <?php require_once('./header.php')?>  

    <!-- 引入导航  -->
    <?php require_once('./topNav.php')?> 

    <!-- 轮播 -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
            <img src="./images/banner01.jpg" alt="...">
            <div class="carousel-caption">
                ...
            </div>
            </div>
            <div class="item">
            <img src="./images/banner02.jpg" alt="...">
            <div class="carousel-caption">
                ...
            </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- 三大特色 -->
   <div class="container">
        <div class="row" id="feature">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h3>投资理财</h3>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"> 
                <h3>投资理财</h3>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h3>投资理财</h3>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
        </div>
   </div>
    <!-- 进行中借款 -->
    <div class="container">
        <div class="panel panel-default blueTitle">
            <!-- Default panel contents -->
            <div class="panel-heading clearfix">
                <h2 class="pull-left">进行中借款</h2>
                <a class="pull-right" href="#" >进入投资列表</a>
            </div>
       
            <!-- 表格 -->
            <table class="table table-hover">
                 <tr>
                    <th>借款人</th>
                    <th class="displayTr">借款标题</th>
                    <th>年利率</th>
                    <th>金额</th>
                    <th>还款方式</th>
                    <th>进度</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td>张三</td>
                    <td class="displayTr">兄弟借5000，家里有事</td>
                    <td>10%</td>
                    <td>5000</td>
                    <td>按月分期还款</td>
                    <td>78.00%</td>
                    <td><button type="button" class="btn btn-danger">查看</button></td>
                </tr>
                <tr>
                    <td>龙哥</td>
                    <td class="displayTr">兄弟借5000，家里有事</td>
                    <td>10%</td>
                    <td>5000</td>
                    <td>按月分期还款</td>
                    <td>20.00%</td>
                    <td><button type="button" class="btn btn-danger">查看</button></td>
                </tr>
            </table>
        </div>
    </div>
   <!-- 企业咨询&用户反馈 -->
    <div class="container">
        <div class="row">
            <!-- 左 -->
            <div class="col-lg-6 col-md-6 col-xs-12"> 
                <div class="panel panel-default blueTitle">
                    <div class="panel-heading clearfix">
                        <h2 class="pull-left">企业最新资讯</h2>
                        <a class="pull-right" href="#" >更多资讯>></a>
                    </div>
                    <!-- 列表 -->
                    <ul class="list">
                        <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                        
                    </ul>
                </div> <!-- panel-default -->
            </div>  <!-- col -->
              <!-- 右 -->
              <div class="col-lg-6 col-md-6 col-xs-12"> 
                <div class="panel panel-default blueTitle">
                    <div class="panel-heading clearfix">
                        <h2 class="pull-left">用户反馈</h2>
                        <a class="pull-right" href="#" >更多资讯>></a>
                    </div>
                    <!-- 列表 -->
                    <ul class="list">
                        <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                        
                    </ul>
                </div> <!-- panel-default -->
            </div>  <!-- col -->
        </div><!-- row -->
    </div>  <!-- container -->

    <!-- 理财经验&活动分享 -->
    <div class="container">
        <div class="row">
            <!-- 左 -->
            <div class="col-lg-6 col-md-6 col-xs-12"> 
                <div class="panel panel-default blueTitle">
                    <!-- Default panel contents -->
                    <div class="panel-heading clearfix">
                        <h2 class="pull-left">理财经验</h2>
                        <a class="pull-right" href="#" >更多资讯>></a>
                    </div>
                    <!-- 列表 -->
                    <ul class="list">
                        <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                        
                    </ul>
                </div> <!-- panel-default -->
            </div>  <!-- col -->
              <!-- 右 -->
              <div class="col-lg-6 col-md-6 col-xs-12"> 
                <div class="panel panel-default blueTitle">
                    <!-- Default panel contents -->
                    <div class="panel-heading clearfix">
                        <h2 class="pull-left">活动分享</h2>
                        <a class="pull-right" href="#" >更多资讯>></a>
                    </div>
                    <!-- 列表 -->
                    <ul class="list">
                        <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                         <li class="clearfix">
                            <span class="pull-left"><a href="">央视力挺互联网金融</a></span>
                            <span class="pull-right"><a href="">发布日期：2018-09-25</a></span>
                         </li>
                        
                    </ul>
                </div> <!-- panel-default -->
            </div>  <!-- col -->
        </div><!-- row -->
    </div>  <!-- container -->
    
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