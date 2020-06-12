<?php
// 服务器
header("Content-Type:text/html; charset=utf-8");
require "dbconfig.php";

// 返回数据 的状态 消息 和数据

//查询语句 

//数据库连接
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
mysqli_query($conn, "set names 'utf8'");

$input0 = $_POST['input0'];
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$input3 = $_POST['input3'];
$input4 = $_POST['input4'];
$select0 = $_POST['select0'];
$select1 = $_POST['select1'];
$select2 = $_POST['select2'];
$select3 = $_POST['select3'];
$select4 = $_POST['select4'];
$heji = $input0 + $input1 + $input2 + $input3 + $input4;

$query0 = "select ye from possaleinfo where id = $select0";
$posname0 = "select posname from possaleinfo where id = $select0";
$possale1dex0 = "select possale1dex from possaleinfo where id = $select0";
$data0 = mysqli_query($conn, $query0);
$name0 = mysqli_query($conn, $posname0);
$dex0 = mysqli_query($conn, $possale1dex0);
$dex01 = mysqli_fetch_array($dex0);
$input0 *= $dex01[0];

$query1 = "select ye from possaleinfo where id = $select1";
$posname1 = "select posname from possaleinfo where id = $select1";
$possale1dex1 = "select possale1dex from possaleinfo where id = $select1";
$data1 = mysqli_query($conn, $query1);
$name1 = mysqli_query($conn, $posname1);
$dex1 = mysqli_query($conn, $possale1dex1);
$dex11 = mysqli_fetch_array($dex1);
$input1 *= $dex11[0];

$query2 = "select ye from possaleinfo where id = $select2";
$posname2 = "select posname from possaleinfo where id = $select2";
$possale1dex2 = "select possale1dex from possaleinfo where id = $select2";
$data2 = mysqli_query($conn, $query2);
$name2 = mysqli_query($conn, $posname2);
$dex2 = mysqli_query($conn, $possale1dex2);
$dex21 = mysqli_fetch_array($dex2);
$input2 *= $dex21[0];

$query3 = "select ye from possaleinfo where id = $select3";
$posname3 = "select posname from possaleinfo where id = $select3";
$possale1dex3 = "select possale1dex from possaleinfo where id = $select3";
$data3 = mysqli_query($conn, $query3);
$name3 = mysqli_query($conn, $posname3);
$dex3 = mysqli_query($conn, $possale1dex3);
$dex31 = mysqli_fetch_array($dex3);
$input3 *= $dex31[0];

$query4 = "select ye from possaleinfo where id = $select4";
$posname4 = "select posname from possaleinfo where id = $select4";
$possale1dex4 = "select possale1dex from possaleinfo where id = $select4";
$data4 = mysqli_query($conn, $query4);
$name4 = mysqli_query($conn, $posname4);
$dex4 = mysqli_query($conn, $possale1dex4);
$dex41 = mysqli_fetch_array($dex4);
$input4 *= $dex41[0];

$jilvlv1 = mysqli_fetch_array($data0);
$jilvlv2 = mysqli_fetch_array($data1);
$jilvlv3 = mysqli_fetch_array($data2);
$jilvlv4 = mysqli_fetch_array($data3);
$jilvlv5 = mysqli_fetch_array($data4);
$posn1 = mysqli_fetch_array($name0);
$posn2 = mysqli_fetch_array($name1);
$posn3 = mysqli_fetch_array($name2);
$posn4 = mysqli_fetch_array($name3);
$posn5 = mysqli_fetch_array($name4);

$huiyuan = $_POST['huiyuan'];
$youhuiheji = $input0 + $input1 + $input2 + $input3 + $input4;
$jifen0 = 0;

if ($input0 >= 5) {
    # code...
    $jifen0 = ($input0 / $jilvlv1[0]) * $huiyuan;
}
if ($jilvlv1[0] == "") {
    $jilvlv1[0] = 0;
    # code...
}
$jifen1 = 0;
if ($input1 >= 5) {
    # code...
    $jifen1 = ($input1 / $jilvlv2[0]) * $huiyuan;
}

$jifen2 = 0;
if ($input2 >= 5) {
    # code...
    $jifen2 = ($input2 / $jilvlv3[0]) * $huiyuan;
}

$jifen3 = 0;
if ($input3 >= 5) {
    # code...
    $jifen3 = ($input3 / $jilvlv4[0]) * $huiyuan;
}

$jifen4 = 0;
if ($input4 >= 5) {
    # code...
    $jifen4 = ($input4 / $jilvlv5[0]) * $huiyuan;
}

echo "全场优惠活动：<br>";
$saleinfoall = mysqli_query($conn, "select saleino from saleinfo ");
$saledata = mysqli_fetch_array($saleinfoall);
foreach ($saledata as $value) {
    echo $value."<br/>";
  }


