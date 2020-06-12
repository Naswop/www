<?php
$del = $_POST["id"];
header("Content-Type:text/html; charset=utf-8");
define('DB_HOST', '127.0.0.1');

//端口号
define('DB_PORT', '3306');

// 用户名
define('DB_USER', 'root');

// 密码
define('DB_PWD', 'zbwxh@150527');

// 数据库名
define('DB_NAME', 'rdj');


// 返回数据 的状态 消息 和数据

//查询语句 

//数据库连接
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
mysqli_query($conn, "set names 'utf8'");
$sql = "delete from posinfo where id=$del";
$result=mysqli_query($conn, $sql);
if($result){
    echo 1;
}else{
    echo 2;
}