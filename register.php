<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户注册</title>
    <!-- 引入bootstrap的css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <!-- 引入bootstrapValidator的样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入当前页面的css -->
    <link rel="stylesheet" href="./dist/css/minCss/register.min.css">
</head>
<body>
    <!-- 引入头部  -->
    <?php include_once('./header.php')?>  
    <!-- 导航 -->
        <div class="panel panel-default">
           <div class="container">
                <div class="panel-body">
                    <img src="./images/logo.png" alt="logo">
                   <h2>用户注册</h2>
                </div>
           </div>
        </div>
        <!-- 表单 -->
        <div class="container reglogin">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">用户注册</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form id="registerForm" method="post" class="form-horizontal"> 
                            <h1 class="hintTitle">请填写注册信息，点击“提交注册”即可完成注册！</h1>
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
                                <label class="col-lg-3 control-label">确认密码</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" name="checkPwd" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">手机号码</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="tel" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">电子邮箱</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
                                    <button type="submit" class="btn btn-success">同意协议并注册</button>
                                    <a href="./login.php" class="text-primary" >已有账号，马上登录</a>
                                </div>
                            </div>
                            <a href="./login.php" class="text-primary explain" >《使用协议说明书》</a>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <!-- 引入尾部  -->
    <?php require_once('./footer.php')?>   
    
    <!-- 引入jQuery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap -->
    <script src="./lib/bootstrap/js/bootstrap.js"></script>
    <!-- 引入bootstrapValidator的JS -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入p2p的js -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 引入表单验证 -->
    <script src="./src/js/checkForm.js"></script>
</body>
</html>