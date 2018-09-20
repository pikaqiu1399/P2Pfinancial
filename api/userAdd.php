<?php

//获取前端发送过来的数据
$username=$_POST["username"];
$password=md5($_POST["password"]);
$mobile=$_POST["tel"];
$email=$_POST["email"];

// echo $username,$password,$password,$mobile,$email;

//连接数据库
require_once("conn.php");

//构造sql语句
$sql="insert into userinfo(username,pwd,mobile,email) values('$username','$password','$mobile','$email')";
// echo $sql;

//执行sql语句
$result=mysqli_query($link,$sql);

//根据执行结果返回相应提示
if($result){
    $reArr=['isSuccess'=>true,'msg'=>'用户注册成功！'];
    echo json_encode($reArr);
}else{
    $reArr=['isSuccess'=>false,'msg'=>'用户注册失败！'];
    echo json_encode($reArr);
}

?>