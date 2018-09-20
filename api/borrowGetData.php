<?php
header('Content-Type:text/html;charset=utf-8');

//连接数据库
require_once('conn.php');

// 构造sql语句
session_start();
$userid=$_SESSION['userid'];
$sql='select * from borrowinfo where userid='.$userid;

//执行sql语句
$result=mysqli_query($link,$sql);

//遍历获取结果集
$borrowData=[];

while($rs=mysqli_fetch_assoc($result)){
    //语法： array_push ( 源数组 , 添加的元素1 [, 添加的元素2 ]... )  
    array_push($borrowData,$rs);
}

//把结果集发送给前端
echo json_encode($borrowData);
?>