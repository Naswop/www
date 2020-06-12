<?php
// 处理编辑操作的页面 
require "dbconfig.php";
// 连接mysql
// 编码设置

$link = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
mysqli_query($link, "set names 'utf8'");


// 获取修改的新闻
$id = $_POST['id'];
$posnumber = $_POST['posnumber'];
$posname = $_POST['posname'];
$possale1 = $_POST['possale1'];
$possale2 = $_POST['possale2'];
$possale3= $_POST['possale3'];
$ye= $_POST['ye'];
// 更新数据
mysqli_query($link,"UPDATE possaleinfo SET ye='$ye',posnumber='$posnumber',posname='$posname',possale1='$possale1',possale2='$possale2',possale3='$possale3' WHERE id=$id") or die('修改数据出错：'); 
header("Location:index.php");  