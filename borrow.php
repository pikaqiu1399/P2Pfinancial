<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我要借款</title>
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
        <div class="row">
            <div class="col-md-4">
                <div class="borrow">
                    <div class="borrowTitle bg-success">
                        <h3>信用贷</h3>
                    </div>
                    <div class="borrowMain">
                        <p>可借金额&emsp;<em>¥ 2,000.00</em></p>
                        <p><a href=""class="text-primary">申请条件</a></p>
                        <p class="grayText">仅限成都地区</p>
                        <ul>
                            <li>
                                <i class="glyphicon glyphicon-file"></i>
                                <span >&nbsp;填写基本资料</span>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-user"></i>
                                <span >&nbsp;身份认证</span>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-camera"></i>
                                <span >&nbsp;视频认证</span>
                            </li>
                        </ul>
                        <button class="btn btn-info center-block"><a href="./borrow_apply.php">立即申请</a></button>
                    </div>
                </div>
            </div>

            <div class="col-md-4"> <div class="borrow">
                    <div class="borrowTitle bg-danger">
                        <h3>车易贷</h3>
                    </div>
                    <div class="borrowMain">
                        <p>可借金额&emsp;<em>¥ 2,000.00</em></p>
                        <p><a href=""class="text-primary">申请条件</a></p>
                        <p class="grayText">仅限成都地区</p>
                        <ul>
                            <li>
                                <i class="glyphicon glyphicon-file"></i>
                                <span >&nbsp;填写基本资料</span>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-user"></i>
                                <span >&nbsp;身份认证</span>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-camera"></i>
                                <span >&nbsp;视频认证</span>
                            </li>
                        </ul>
                        <button class="btn btn-info center-block"><a href="./borrow_apply.php">立即申请</a></button>
                    </div>
                </div>
            </div>

            <div class="col-md-4"> <div class="borrow">
                    <div class="borrowTitle bg-info">
                        <h3>房易贷</h3>
                    </div>
                    <div class="borrowMain">
                        <p>可借金额&emsp;<em>¥ 2,000.00</em></p>
                        <p><a href=""class="text-primary">申请条件</a></p>
                        <p class="grayText">仅限成都地区</p>
                        <ul>
                            <li>
                                <i class="glyphicon glyphicon-file"></i>
                                <span >&nbsp;填写基本资料</span>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-user"></i>
                                <span >&nbsp;身份认证</span>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-camera"></i>
                                <span >&nbsp;视频认证</span>
                            </li>
                        </ul>
                        <button class="btn btn-info center-block"><a href="./borrow_apply.php">立即申请</a></button>
                    </div>
                </div>
            </div>
        </div>
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