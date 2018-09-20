<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户登录</title>
    <!-- 引入bootstrap的css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <!-- 引入bootstrapValidator的样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入当前页面的css -->
    <link rel="stylesheet" href="./dist/css/minCss/login.min.css">
</head>
<body>
    <!-- 引入头部  -->
    <?php include_once('./header.php')?>  
    <!-- 导航 -->
        <div class="panel panel-default">
           <div class="container">
                <div class="panel-body">
                    <img src="./images/logo.png" alt="logo">
                   <h2>用户登录</h2>
                </div>
           </div>
        </div>
        <!-- 表单 -->
        <div class="container reglogin">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">用户登录</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form id="loginForm" method="post" class="form-horizontal" >
                            <div class="form-group">
                                <label class="col-lg-3 control-label">用户名</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="username" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">密&emsp;码</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" name="password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
                                    <button type="submit" class="btn btn-success">登录</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <!-- 引入尾部  -->
    <?php require_once('./footer.php')?>  

    <!-- 模态框蒙层-->
    <div id="loginModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="loginModalTitle">标题</h4>
            </div>
            <div class="modal-body" id="loginModalContent">
                <p>内容</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- 引入jQuery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap -->
    <script src="./lib/bootstrap/js/bootstrap.js"></script>
    <!-- 引入bootstrapValidator的JS -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入p2p的js -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 引入表单验证 -->
    <script src="./dist/js/checkForm.min.js"></script>
</body>
</html>