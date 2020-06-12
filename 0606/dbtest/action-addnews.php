<?php
// 处理增加操作的页面 
require "dbconfig.php";
// 连接mysql
// 编码设置

$link = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
mysqli_query($link, "set names 'utf8'");

// 获取增加的新闻
$posnumber = $_POST['posnumber'];
$posname = $_POST['posname'];
$possale1 = $_POST['possale1'];
$possale2 = $_POST['possale2'];
$possale3 = $_POST['possale3'];
$ye = $_POST['ye'];
// 插入数据
mysqli_query("INSERT INTO possaleinfo(posnumber,posname,possale1,possale2,possale3,ye) VALUES ('$posnumber','$posname','$possale1','$possale2','$possale3','ye')",$link) or die('添加数据出错：'); 
header("Location:index.php");  