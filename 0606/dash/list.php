<?php




header("Content-Type:text/html; charset=utf-8");
require "dbconfig.php";


// 返回数据 的状态 消息 和数据

//查询语句 

//数据库连接
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
mysqli_query($conn, "set names 'utf8'");


$sql = "select * from possaleinfo";





$result = mysqli_query($conn, $sql);


$data = array();
while($row=$result->fetch_assoc()){
    $data[] = $row;
}
echo json_encode($data,JSON_UNESCAPED_UNICODE);
