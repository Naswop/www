<?php
// 处理删除操作的页面 
require "dbconfig.php";
// 连接mysql
// 编码设置

$link = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
mysqli_query($link, "set names 'utf8'");

$id = $_GET['id'];
//删除指定数据  
mysqli_query($link,"DELETE FROM possaleinfo WHERE id={$id}") or die('删除数据出错：'); 
// 删除完跳转到新闻页
header("Location:index.php");  