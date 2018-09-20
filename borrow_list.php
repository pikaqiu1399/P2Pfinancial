<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的借款信息</title>
    <!-- 引入bootstrap的css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <!-- 引入bootstrapValidator的样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入当前页面的css -->
    <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
    <!-- 引入jQuery -->
    <script src="./lib/jquery/jquery.min.js"></script>
</head>
<body>
    <!-- 引入头部  -->
    <?php include_once('./header.php')?>

    <!-- 引入导航  -->
    <?php require_once('./topNav.php')?>

    <!-- 表格 -->
    <div class="container">
          <!-- 引入左侧内容 -->
        <?php require_once('./leftList.php')?>

        <div class="row">
            <div class="col-sm-8 co-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">我的借款信息</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>标题</th>
                                    <th>时间</th>
                                    <th>借款金额（元）</th>
                                    <th>期限</th>
                                    <th>利率</th>
                                    <th>状态</th>
                                </tr>
                            </thead>
                            <tbody id="borrowData">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- 引入尾部  -->
    <?php require_once('./footer.php')?>

    <!-- 引入jQuery模板引擎库 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 引入bootstrap -->
    <script src="./lib/bootstrap/js/bootstrap.js"></script>
    <!-- 引入bootstrapValidator的JS -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入p2p的js -->
    <script src="./dist/js/p2p.min.js"></script>
    
    <!-- 定义模板，渲染页面内容 -->
    <script id="borrowTmpl" type="text/html">
        <tr>
            <td>${borrowTitle}</td>
            <td>${submitDatetime}</td>
            <td>${borrowAmount}</td>
            <td>${monthes2Return}</td>
            <td>${currentRate}%</td>
            <td>
                <label class="text-muted">待发布</label>
            </td>
        </tr>
    </script>

<!-- 借款逻辑 -->
<script src="./dist/js/borrowList.min.js"></script>
</body>
</html>