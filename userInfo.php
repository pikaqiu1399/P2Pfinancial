<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>资料完善</title>
</head>
 <!-- 引入bootstrap的css -->
 <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">

 <!-- 引入当前的样式 -->
 <link rel="stylesheet" href="./dist/css/minCss/userInfo.min.css">
<body>
    <!-- 引入头部  -->
    <?php require_once('./header.php')?>  

    <!-- 引入导航  -->
    <?php require_once('./topNav.php')?> 

    <div class="container">
        <div class="row">
            <!-- 折叠框 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" class="text-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            投资项目
                            </a>
                        </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul>
                                <li><a href="" class="text-primary">投资项目1</a></li>
                                <li><a href="" class="text-primary">投资项目2</a></li>
                                <li><a href="" class="text-primary">投资项目3</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" class="text-primary" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           借款项目
                            </a>
                        </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <ul>
                                <li><a href="" class="text-primary" >借款项目</a></li>
                                <li><a href="" class="text-primary" >还款明细</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" class="text-primary" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            我的账户
                            </a>
                        </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                        <ul>
                            <li><a href="" class="text-primary">账户信息</a></li>
                            <li><a href="" class="text-primary">实名认证</a></li>
                            <li><a href="" class="text-primary">银行卡管理</a></li>
                            <li><a href="" class="text-primary">登录记录</a></li>
                        </ul>
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" class="text-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            资产详情
                            </a>
                        </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul>
                                <li><a href="" class="text-primary">账户流水</a></li>
                                <li><a href="" class="text-primary">充值明细</a></li>
                                <li><a href="" class="text-primary">提现记录</a></li>
                                <li><a href="" class="text-primary">收款明细</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            个人资料
                            </a>
                        </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <ul>
                                <li><a href="" class="text-primary">个人资料</a></li>
                                <li><a href="" class="text-primary">个人资料1</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 表单 -->
            <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">个人资料</div>
                    <div class="panel-body">
                        <form id="loginForm" method="post" class="form-horizontal" action="ajaxSubmit.php">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">用户名</label>
                                    <div class="col-lg-5">
                                        <p>强哥</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">真实姓名</label>
                                    <div class="col-lg-5">
                                        <p>小强</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">证件号码</label>
                                    <div class="col-lg-5">
                                        <p>5111***********854</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">手机号码</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="tel" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">联系电话</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="calltel" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">个人学历</label>
                                    <div class="col-lg-5">
                                        <select class="form-control" name="education">
                                            <option value="">-- 个人学历 --</option>
                                            <option value="mid">初中</option>
                                            <option value="high">中专/高中</option>
                                            <option value="juniorCollege">大学专科</option>
                                            <option value="regularCollege">大学本科</option>
                                            <option value="master">硕士研究生</option>
                                            <option value="doctor">博士研究生</option>
                                        </select>
                                    </div>
                                </div>

                             
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">个人收入</label>
                                    <div class="col-lg-5">
                                        <select class="form-control" name="income">
                                            <option value="">-- 请选择你的个人收入 --</option>
                                            <option value="one">1000元以下</option>
                                            <option value="three">1000元-2999元</option>
                                            <option value="five">3000元-4999元</option>
                                            <option value="nine">5000元-8999元</option>
                                            <option value="tenThousand">10000元以上</option>
                                        </select> 
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-lg-3 control-label">联系地址</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="address" />
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <button type="submit" class="btn btn-primary">保存数据</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
    <!-- 引入自己的js -->
    <script src="./dist/js/p2p.min.js"></script>
</body>
</html>