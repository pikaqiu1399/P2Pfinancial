// 发起ajax请求到后端api验证是否登录
$.get('./api/checkState.php',function(data){
    console.log('api的验证结果：',data);

    //如果没有验证成功就弹出登录失败，并跳转到登录页面
    if(!data.isSuccess){
        alert(data.msg);
        location.href='login.php';
    }
},'json')