<?php
$posnumber = $_POST['posnumber'];
$posname = $_POST['posname'];
$possale1 = $_POST['possale1'];
$possale2 = $_POST['possale2'];
$possale3 = $_POST['possale3'];
$t = $_GET["id"];
header("Content-Type:text/html; charset=utf-8");
require "../dbconfig.php";


// 返回数据 的状态 消息 和数据

//查询语句 

//数据库连接
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
mysqli_query($conn, "set names 'utf8'");
$sql = "update possaleinfo set posnumber='$posnumber',posname='$posname',possale1='$possale1',possale2='$possale2',possale3='$possale3' where id=$t";

$result=mysqli_query($conn, $sql);

//echo $sql;
if($result){
    echo "修改成功";
}else{
    echo "修改失败";
}

