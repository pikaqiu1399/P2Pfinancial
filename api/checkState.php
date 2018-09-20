<?php
// 开启session
session_start();
// 根据用户名是否存在弹出对应信息
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    $result=["isSuccess"=>true,"msg"=>"登陆成功！","username"=>$username];
    // var_dump ($result);
    echo json_encode($result);
}else{
    $result=["isSuccess"=>false,"msg"=>"登陆失败！"];
    echo json_encode($result);
    }
?>
