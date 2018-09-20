<?php
header('Content-Type:text/html;charset=utf-8');

//连接数据库
require_once('conn.php');

// 构造总记录数sql语句
$sql='select * from borrowinfo';

//执行sql语句
$result=mysqli_query($link,$sql);

//获取总的记录数
$total=mysqli_num_rows($result); 

//接收分页参数
$pageIndex=$_GET['pageIndex'];
$pageSize=$_GET['pageSize'];
// echo $pageIndex;
// echo $pageSize;

//构造分页sql语句
$skipNum=$pageIndex*$pageSize;//跳过的条数
$sql.=" limit $skipNum,$pageSize";


//执行sql语句

$result=mysqli_query($link,$sql);


//当前页显示的数据
$borrowData=[];

$rs=mysqli_fetch_assoc($result);
// var_dump($rs);

while ($rs=mysqli_fetch_assoc($result)) {
    //语法： array_push ( 源数组 , 添加的元素1 [, 添加的元素2 ]... )  
    array_push($borrowData,$rs);
};

//按照分页插件的要求封装结果并返回
$result=[
    "total"=>$total,
    "list"=>$borrowData
];
// 把结果集发送给前端
echo json_encode($result);
// var_dump($result);
?>