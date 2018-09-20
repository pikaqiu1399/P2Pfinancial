$(document).ready(function() {

    // 注册表单验证
    $('#registerForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            //对那些表单元素做验证
            fields: {
                username: {
                    message: '必填！',
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空！'
                        },
                        stringLength: {
                            min: 6,
                            max: 12,
                            message: '用户名长度在6~12位'
                        },
                       
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: '用户名只能由字母、数字、点和下划线组成e'
                        }
                    }
                },
                tel: {
                    message: '请输入手机号码',
                    validators: {
                        notEmpty: {
                            message: '手机号码不能为空！'
                        },
                        stringLength: {
                            min: 11,
                            max: 11,
                            message: '长度在11位'
                        },
                       
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: '电子邮箱不能为空！'
                        },
                        emailAddress: {
                            message: '请输入正确的邮箱地址！'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空！'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '密码长度6~18位'
                        }
                    }
                },
                checkPwd: {
                    validators: {
                        notEmpty: {
                            message: '确认密码不能为空！'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '密码长度6~18位'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            // 阻止表单默认提交时间
            e.preventDefault();

            // 获取表单实例
            var $form = $(e.target);

            // 获取验证实例
            var bv = $form.data('bootstrapValidator');

            //获取请求地址
            var reqUrl='./api/userAdd.php';

            //获取表单数据
            var data=$form.serialize();
            // console.log(data);

            //使用ajax提交表单数据
           $.post(reqUrl,data,function(result) {
                console.log('api返回的结果',result);
                
                //如果注册成功弹出对应提示并跳转到登录页面
            if(result.isSuccess){
                    alert(result.msg);
                    location.href="./login.php";
                }else{
                    alert(result.msg);
                } 
            }, 'json'); 
        });


//----------------------------------登录表单验证--------------------------------------------------------------------------
    $('#loginForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            //对哪些表单元素做验证
            fields: {
                username: {
                    message: '必填！',
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空！'
                        },
                        stringLength: {
                            min: 6,
                            max: 12,
                            message: '用户名长度在6~12位'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: '用户名只能由字母、数字、点和下划线组成e'
                        }
                    }
                },
                
                password: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空！'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '密码长度6~18位'
                        },
                    }
                },
           
            }
        })
        .on('success.form.bv', function(e) {
            // 阻止表单默认提交时间
            e.preventDefault();

            // 获取表单实例
            var $form = $(e.target);

            // 获取验证实例
            var bv = $form.data('bootstrapValidator');

            //获取请求地址
            var reqUrl='./api/userCheck.php';

            //获取表单数据
            var data=$form.serialize();
            //  console.log(data);

            //使用ajax提交表单数据
           $.post(reqUrl,data,function(result) {
                console.log('api返回的结果',result);
                
                //如果注册成功弹出对应提示并跳转到登录页面
            if(result.isSuccess){
                    // alert(result.msg);
                    // location.href="./personal.php";
                    // 使用蒙层标题
                    $("#loginModalTitle").text('登录成功！');

                    //设置蒙层内容
                    $("#loginModalContent").html(`<span class='glyphicon glyphicon-ok'></span>&emsp;${result.msg},等待<span id='timeNum'>5</span>秒之后跳转到个人中心`);

                    //定时器修改等待数字
                    let num=5;
                    var timeNum=setInterval(()=>{
                        num--;
                        $("#timeNum").text(num);
                        if(num==0){
                            clearInterval(timeNum);
                            location.href="./personal.php";
                        }

                    },1000);
                }else{
                    // alert(result.msg);
                    // 使用蒙层标题
                    $("#loginModalTitle").text('登录失败！');

                    //设置蒙层内容
                    $("#loginModalContent").html(`<span class='glyphicon glyphicon-remove'></span>&emsp;${result.msg}`);
                } 
                // 显示蒙层
                $("#loginModal").modal('show');
            }, 'json'); 
        });
});



