<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我要投资</title>
</head>
<!-- 引入bootstrap的css -->
<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
<!-- 引入当前的样式 -->
<link rel="stylesheet" href="./dist/css/minCss/invest.min.css">
<!-- 引入插件css -->
<link rel="stylesheet" href="./lib/JqueryPagination20160510/jquery.pagination.css">

<body>
    <!-- 引入头部  -->
    <?php require_once('./header.php')?>

    <!-- 引入导航  -->
    <?php require_once('./topNav.php')?>

    <!-- 本页单独内容开始 -->
    <div class="container">
        <h4>投资列表</h4>
        <!-- <span> 标的状态</span> -->
        <ul id="myTab" class="nav nav-tabs">
            <li class="tabState">标的状态</li>
            <li class="active">
                <a href="#A" data-toggle="tab">
                    全部
                </a>
            </li>
            <li>
                <a href="#B" data-toggle="tab">招标中</a>
            </li>
            <li>
                <a href="#C" data-toggle="tab">还款中</a>
            </li>
        </ul <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="A">
            <!-- 表格 -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>借款人</th>
                        <th class="displayTr">借款标题</th>
                        <th>年利率</th>
                        <th>金额</th>
                        <th>还款方式</th>
                        <th>进度</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody id="mainId">
                    <!-- 渲染内容 -->
                </tbody>
            </table>
            <!-- 此处是分页插件  4. 拷贝页面结构-->
            <div style="width:1000px; margin:0 auto;">
                <div id="page" class="m-pagination"></div>
            </div>
        </div>

        <!-- 插件结束 -->
    </div>
    <div class="tab-pane fade" id="B">
        <p>招标中内容</p>
    </div>
    <div class="tab-pane fade" id="B">
        <p>还款中内容</p>
    </div>

    </div>

    </div>
    <!-- 本页单独内容结束 -->

    <!-- 引入尾部  -->
    <?php require_once('./footer.php')?>
    <!-- 引入jQuery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入jQuery模板引擎库 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 引入分页插件 -->
    <script src="./lib/JqueryPagination20160510/jquery.pagination-1.2.7.js"></script>
   
    <!-- 引入bootstrap -->
    <script src="./lib/bootstrap/js/bootstrap.js"></script>
    <!-- 引入自己的js -->
    <script src="./dist/js/p2p.min.js"></script>

    <script id="borrowTmpl" type="text/html">
        <tr>
            <td>zs</td>
            <td>${borrowTitle}</td>
            <td class="text-info">${currentRate}%</td>
            <td class="text-info">${borrowAmount}</td>
            <td>${repayment}</td>
            <td>100.00%</td>
            <td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=7">查看</a></td>
        </tr>
    </script>

    <script>
        //5. 配置插件的参数
        $("#page").page({
            debug: true,
            showInfo: true,
            showJump: true,
            showPageSizes: true,
            pageSize:5,
            remote: {
                url: './api/borrowAll.php',
                success: function (data) {
                    console.log("fhgfh");
                    // 渲染模板
                    var htmlStr = $("#borrowTmpl").tmpl(data.list);
                    // console.log(htmlStr);
                    $("#mainId").html(htmlStr);
                }
            }
        });

        $("#page").on("pageClicked", function (event, pageIndex) {
            $("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('jumpClicked', function (event, pageIndex) {
            $("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('pageSizeChanged', function (event, pageSize) {
            $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        });
    </script>
</body>
</html>