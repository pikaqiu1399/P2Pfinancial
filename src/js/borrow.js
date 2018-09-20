//获取借款的类型
var reqUrl=location.href;
var borrowType=reqUrl.split('=')[1];
$("#borrowType").val(borrowType);

//点击提交按钮
$("#btnSubmit").on('click',function(){
    //获取表单元素的值
     var formData=$("#borrowForm").serialize();
    //  console.log(formData)

    //  发起ajax请求
    $.post('./api/borrow_add.php',formData,function(result){
        console.log('借款信息是否提交成功：',result);

        //根据后端api返回的结果处理前端的业务逻辑
        if(result.isSuccess){
            //成功弹出对应提示并跳转到借款列表页面
            alert(result.msg)
            location.href="borrow_list.php"
        }else{
            // 失败弹出错误提示
            alert(result.msg);
        }
    },'json')
});

