<?php
// 处理增加操作的页面 
$posnumber = $_POST['posnumber'];
$posname = $_POST['posname'];
$possale1 = $_POST['possale1'];
$possale2 = $_POST['possale2'];
$possale3 = $_POST['possale3'];
$ye = $_POST['ye'];
header("Content-Type:text/html; charset=utf-8");
require "../dbconfig.php";

// 连接mysql
// 编码设置

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');

// 获取增加的新闻

mysqli_query($conn, "set names 'utf8'");
$sql = "INSERT INTO possaleinfo(posnumber,posname,possale1,possale2,possale3,ye) VALUES ('$posnumber','$posname','$possale1','$possale2','$possale3','ye')";


// 插入数据
mysqli_query($conn,$sql);

$result=mysqli_query($conn, $sql);
if($result){
    echo 1;
}else{
    echo 2;
}