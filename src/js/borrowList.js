//借款页面加载时自动发起ajax请求到后台的api获取当前登录用户的借款信息
$.get('./api/borrowGetData.php',function(result){
    //语法：$('模板ID').tmpl(JSON数据或者数组) 返回的是数据和模板拼凑的html 
    var htmlStr=$("#borrowTmpl").tmpl(result);
// console.log(result);
    // 把渲染后的html更新到页面
    $("#borrowData").html(htmlStr);
},'json')