<?php
// 服务器
header("Content-Type:text/html; charset=utf-8");
require "dbconfig.php";
// 返回数据 的状态 消息 和数据

//查询语句 

//数据库连接
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
mysqli_query($conn, "set names 'utf8'");
$select4 = "";
// echo "666";
if ($_POST['select4'] != 0) {
    $select4 = $_POST['select4'];
    $query0 = "select possale1 from possaleinfo where id = $select4";
    $query1 = "select possale2 from possaleinfo where id = $select4";
    $query2 = "select possale3 from possaleinfo where id = $select4";
    $data0 = mysqli_query($conn, $query0);
    $data1 = mysqli_query($conn, $query1);
    $data2 = mysqli_query($conn, $query2);
    $aa=mysqli_fetch_array($data0);
    $bb=mysqli_fetch_array($data1);
    $cc=mysqli_fetch_array($data2);
    echo "1.".$aa[0]."</br>";
    echo "2.".$bb[0]."</br>";
    echo "3.".$cc[0];
}

