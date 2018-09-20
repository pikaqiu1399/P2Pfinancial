<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
 <!-- 引入公共css -->
 <link rel="stylesheet" href="./dist/css/minCss/header.min.css">
<body>
        <!-- 头部 -->
<nav class="navbar navbar-inverse header">
        <div class="container">
    <!-- 电话 -->
    <div class="navbar-header phone">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <span class="glyphicon glyphicon-phone-alt"></span>028-86260949</a>
    </div>
    <!-- 头部右边菜单 -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li id="homepage"><a href="./index.php">首页</a></li>
        <!-- 登陆后 -->
        <!-- <li><a href="#">小强</a></li>
        <li><a href="#">赶快充值</a></li>
        <li><a href="./api/loginOut.php">注销</a></li>
        <!-- 登录前 -->
        <!-- <li><a href="./register.php">注册</a></li>
        <li><a href="./login.php">登录</a></li> -->
        <li><a href="#">帮助</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<img src='./images/contract.png'>">联系客服</a></li>` -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  

<!-- 引入jQuery -->
<script src="./lib/jquery/jquery.min.js"></script>

<!-- 根据登录状态显示不同的菜单 -->
<script>
$.get('./api/checkState.php',function(data){
  console.log('头部验证：',data.isSuccess);

  // //处理业务逻辑
    if(data.isSuccess){
      // 登陆后
      var htmlStr=`<li><a href="#">${data.username}</a></li>
      <li><a href="#">赶快充值</a></li>
      <li><a href="./api/loginOut.php">注销</a></li>`;
      //动态显示dom
      $("#homepage").after(htmlStr);
    }else{
          //登录前
    var htmlStr=`<li><a href="./register.php">注册</a></li>
    <li><a href="./login.php">登录</a></li>`;
    //动态显示dom
    $("#homepage").after(htmlStr);
      }
},'json')
</script>
</body>
</html>