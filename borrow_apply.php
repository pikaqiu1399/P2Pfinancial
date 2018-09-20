<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款信息</title>
</head>
<!-- 引入bootstrap的css -->
<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">

<!-- 引入jQuery -->
<script src="./lib/jquery/jquery.min.js"></script>

<!-- 引入当前的样式 -->
<link rel="stylesheet" href="./dist/css/minCss/borrow_apply.min.css">

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

            <!-- 右边 -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" id="rightMain">
                <!-- 背景 -->
                <div class="bg-info" id="bgBlue">
                    <h3>信用借款</h3>
                    <span class="text-primary">授信额度：
                        <span class="text-danger">2000</span>
                    </span>
                    <span class="text-primary">可借金额：
                        <span class="text-danger">2000</span>
                    </span>
                </div>
                <!-- 下面的内容 -->
                <div class="page-header" id="rightTitle">
                    <h4>借款信息</h4>
                    <span class="btnTitle">信用标</span>
                </div>
                <!-- 表单 -->
                <div class="row">
                    <form id="borrowForm" method="post" class="form-horizontal">
                        <div class="form-group">
                                <label class="col-lg-3 control-label">借款类型&emsp;</label>
                                <div class="input-group col-lg-5">
                                    <select class="form-control" name="borrowType" id="borrowType">
                                        <option value="t1">信用贷</option>
                                        <option value="t2">车易贷</option>
                                        <option value="t3">房易贷</option>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">借款金额&emsp;</label>
                            <div class="col-lg-5 input-group">
                                <input type="text" class="form-control" id="exampleInputAmount" name="borrowAmount">
                                <div class="input-group-addon">元</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">借款利息&emsp;</label>
                            <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                            <div class="input-group col-lg-5">
                                <input type="text" class="form-control" id="exampleInputAmount" name="currentRate">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">借款期限&emsp;</label>
                            <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                            <div class="input-group col-lg-5">
                                <select class="form-control" name="monthes2Return">
                                    <option>1</option>
                                    <option>3</option>
                                    <option>6</option>
                                    <option>9</option>
                                    <option>12</option>
                                    <option>24</option>
                                </select>
                                <div class="input-group-addon">月</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">还款方式&emsp;</label>
                            <div class="input-group col-lg-5">
                                <label class="radio-inline">
                                    <input type="radio" name="repayment" id="inlineRadio1" value="按月分期"> 按月分期
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="repayment" id="inlineRadio2" value="按月到期">按月到期
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">最小投标&emsp;</label>
                            <div class="col-lg-5 input-group">
                                <input type="text" class="form-control" id="exampleInputAmount" name="minAmount">
                                <div class="input-group-addon">元</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">最大投标&emsp;</label>
                            <div class="col-lg-5 input-group">
                                <input type="text" class="form-control" id="exampleInputAmount" name="maxAmount">
                                <div class="input-group-addon">元</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">投标奖金&emsp;</label>
                            <div class="col-lg-5 input-group">
                                <input type="text" class="form-control" id="exampleInputAmount" name="rewardAmount">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">招标天数&emsp;</label>
                            <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                            <div class="input-group col-lg-5">
                                <select class="form-control" name="disableDays">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                   
                                </select>
                                <div class="input-group-addon">元</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">借款标题&emsp;</label>
                            <div class="input-group col-lg-5">
                            <input type="text" class="form-control" id="exampleInputAmount" name="borrowTitle">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">借款描述&emsp;</label>
                            <div class="input-group col-lg-5">
                            <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="button" class="btn btn-primary" id="btnSubmit">提交申请</button>
                            </div>
                        </div>

                    </form>

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
        $("#btnOff").on('click', function () {
            //点击时切换状态
            $("#personal").toggleClass('active');
            // 如果有，按钮字就变成显示，没有就是隐藏
            if ($("#personal").hasClass('active')) {
                $(this).text("显示");
            } else {
                $(this).text("隐藏");
            }
        });
        //手机端触摸滑动显示/隐藏
        var x1, y1;
        //开始滑动
        $(window).on('touchstart', function (e) {
            x1 = e.originalEvent.changedTouches[0].clientX;
            y1 = e.originalEvent.changedTouches[0].clientY;
        })
        //结束滑动
        $(window).on('touchend', function (e) {
            var x2 = e.originalEvent.changedTouches[0].clientX;
            var y2 = e.originalEvent.changedTouches[0].clientY;
            //滑动距离
            var dx = x2 - x1;
            var dy = y2 - y1;

            //如果滑动距离大于100（有效距离）就借用按钮的事件
            if (Math.abs(dx) >= 100) {
                console.log('ok');
                $('btnOff').trigger('click');
            }
        })
    </script>
    <script src="./dist/js/borrow.min.js"></script>
</body>

</html>