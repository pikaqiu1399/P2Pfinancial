<?php
//后端逻辑
// 接收前端传过来的数据
$borrowType=$_POST['borrowType'];//s
$borrowAmount=$_POST['borrowAmount'];
$currentRate=$_POST['currentRate'];
$monthes2Return=$_POST['monthes2Return'];
$repayment=$_POST['repayment'];//s
$minAmount=$_POST['minAmount'];
$maxAmount=$_POST['maxAmount'];
$rewardAmount=$_POST['rewardAmount'];
$disableDays=$_POST['disableDays'];
$borrowTitle=$_POST['borrowTitle'];//s
$description=$_POST['description'];//s
//通过session获取userid
session_start();
$userid=$_SESSION['userid'];

//连接数据库
require_once('conn.php');
// 构造sql语句
$sql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,userid) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$userid)";
// echo $sql;

//执行sql语句
$result=mysqli_query($link,$sql);

//返回结果
if($result){
    //成功
    $Arr=['isSuccess'=>true,'msg'=>'借款信息提交成功！'];
    echo json_encode($Arr);
    }else{
        $Arr=['isSuccess'=>false,'msg'=>'借款信息提交失败！'];
        echo json_encode($Arr);
}

// 关闭数据库连接
require_once('closeLink.php');
?>