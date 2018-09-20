<?php

//获取前端发送过来的数据
$username=$_POST["username"];
$password=md5($_POST["password"]);//使用md5对密码进行加密
// echo $username;
// echo $password;

//连接数据库
require_once("conn.php");

//构造sql语句
$sql="select * from userinfo where username='$username' and pwd='$password'";
// echo $sql;

//执行sql语句
$result=mysqli_query($link,$sql);

//获取结果集
$rs=mysqli_fetch_assoc($result);
// var_dump ($rs);

//根据是否执行成返回json到前端
if($rs!=null){
    //登录成功就创建session
    session_start();
    $_SESSION['username']=$rs['username'];
    $_SESSION["userid"]=$rs["userid"]; 
    // 把关联数组对象转为json格式
    $rsArr=["isSuccess"=>true,"msg"=>"登录成功！"];
    echo json_encode($rsArr);
}else{
    $rsArr=["isSuccess"=>false,"msg"=>"登录失败！"];
    echo json_encode($rsArr);
}

//释放内存资源
mysqli_free_result($result);
//关闭数据库
require_once('closeLink.php');

?>