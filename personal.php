<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
</head>
 <!-- 引入bootstrap的css -->
 <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">

 <!-- 引入jQuery -->
 <script src="./lib/jquery/jquery.min.js"></script>

 <!-- 引入当前的样式 -->
 <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
 
 <!-- 判断用户是否合法 -->
 <script src="./dist/js/userStateCheck.min.js"></script>
<body>
    <!-- 引入头部  -->
    <?php require_once('./header.php')?>  

    <!-- 引入导航  -->
    <?php require_once('./topNav.php')?> 

    <div class="container" id="personal">
        <div class="row">
            <!-- 折叠框 -->
            <?php require_once('./leftList.php') ?>

            <!-- 右边面板 -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" id="rightMain">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <button type="button" id="btnOff" class="btn-primary btn-sm">隐藏</button>
                        <!-- 个人信息 -->
                       <div class="personMsg clearfix">
                            <div class="myImg pull-left">
                                <img src="./images/head_icon.jpg" alt="">
                            </div>
                            <ul class="pull-left">
                                <li>昵&emsp;称：源代码教育</li>
                                <li>用户名：小强</li>
                                <li>最后登录时间：2016-10-25 15:30:10</li>
                            </ul>
                        
                       </div>
                       <!-- 下面 -->
                       <!-- 第一排 -->
                       <div class="row">
                            <div class="col-md-4 col-xs-12"><h4>总金额：<span class="text-primary">10000元</span></h4></div>
                            <div class="col-md-4 col-xs-12"><h4>可用金额：<span class="text-primary">8000元</span></h4></div>
                            <div class="col-md-4 col-xs-12"><h4>冻结金额：<span class="text-primary">2000元</span></h4></div>
                        </div>
                        <!-- 第二排 -->
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 col-xs-12">
                            <button type="button" class="btn btn-primary btn-lg">账户充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账户体现</button>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <!-- 第三排 -->
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <img src="./images/shiming.png" alt="" class="provePic">
                                <div class="proveTitle">
                                    <h4>实名认证</h4>
                                    <p>未认证&nbsp;<a href="" class="text-primary">马上认证</a></p>
                                </div>
                                <p>实名认证之后才能在平台投资</p>
                            </div>

                            <div class="col-md-4 col-xs-12">
                            <img src="./images/shouji.jpg" alt="" class="provePic">
                                <div class="proveTitle">
                                    <h4>手机认证</h4>
                                    <p>已认证&nbsp;<a href="" class="text-primary">查看</a></p>
                                </div>
                                <p>可以收到系统操作信息,增加使用安全性</p>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <img src="./images/youxiang.jpg" alt="邮箱" class="provePic">
                                    <div class="proveTitle">
                                        <h4>邮箱认证</h4>
                                        <p>已认证&nbsp;<a href="" class="text-primary">查看</a></p>
                                    </div>
                                    <p>您可以设置邮箱来接收重要信息</p>
                            </div>
                        </div>
                        <!-- 第四排 -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="./images/baozhan.jpg" alt="" class="provePic">
                                <div class="proveTitle">
                                    <h4>VIP会员</h4>
                                    <p>普通用户&nbsp;<a href="" class="text-primary">查看</a></p>
                                </div>
                                <p>VIP会员，让你更快捷的投资</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <!-- 引入尾部  -->
    <?php require_once('./footer.php')?>   
    
    <!-- 引入bootstrap -->
    <script src="./lib/bootstrap/js/bootstrap.js"></script>
    <!-- 引入自己的js -->
    <script src="./dist/js/p2p.min.js"></script>

    <script>
        //pc端点击显示/隐藏
    $("#btnOff").on('click',function(){
        //点击时切换状态
        $("#personal").toggleClass('active');
        // 如果有，按钮字就变成显示，没有就是隐藏
        if($("#personal").hasClass('active')){
            $(this).text("显示");
        }else{
            $(this).text("隐藏");
        }
    });
    //手机端触摸滑动显示/隐藏
    var x1,y1;
    //开始滑动
    $(window).on('touchstart',function(e){
        x1=e.originalEvent.changedTouches[0].clientX;
        y1=e.originalEvent.changedTouches[0].clientY;
    })
    //结束滑动
    $(window).on('touchend',function(e){
        var x2=e.originalEvent.changedTouches[0].clientX;
        var y2=e.originalEvent.changedTouches[0].clientY;
        //滑动距离
        var dx=x2-x1;
        var dy=y2-y1;
    
    //如果滑动距离大于100（有效距离）就借用按钮的事件
        if(Math.abs(dx)>=100){
            console.log('ok');
            $('btnOff').trigger('click');
        }
    })
    </script>
</body>
</html>