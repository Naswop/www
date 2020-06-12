<?php
// 服务器
header("Content-Type:text/html; charset=utf-8");
require "dbconfig.php";
// 返回数据 的状态 消息 和数据

//查询语句 

//数据库连接
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
mysqli_query($conn, "set names 'utf8'");
$xianjifen = 0;
if ($_POST['jifen']) {
    $xianjifen = $_POST['jifen'];
    # code...
}
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

$jifen0 = 0;

if ($input0 >= 5) {
    # code...
    $jifen0 = floor(($input0 / $jilvlv1[0]) * $huiyuan);
}
if ($jilvlv1[0] == "") {
    $jilvlv1[0] = 0;
    # code...
}
$jifen1 = 0;
if ($input1 >= 5) {
    # code...
    $jifen1 = floor(($input1 / $jilvlv2[0]) * $huiyuan);
}

$jifen2 = 0;
if ($input2 >= 5) {
    # code...
    $jifen2 = floor(($input2 / $jilvlv3[0]) * $huiyuan);
}

$jifen3 = 0;
if ($input3 >= 5) {
    # code...
    $jifen3 = floor(($input3 / $jilvlv4[0]) * $huiyuan);
}

$jifen4 = 0;
if ($input4 >= 5) {
    # code...
    $jifen4 = floor(($input4 / $jilvlv5[0]) * $huiyuan);
}

$jifenheji = $jifen0 + $jifen1 + $jifen2 + $jifen3 + $jifen4 + $xianjifen;
$youhui = "";
$hejihou = "";
$faka = 0;

$giftq = "select giftname,giftpoint from giftinfo where giftpoint <= $jifenheji order by giftpoint";
$giftn = mysqli_query($conn, $giftq);




$query4 = "select * from saleinfo where id = 1";
$result = mysqli_query($conn, $query4);

if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while ($row = mysqli_fetch_assoc($result)) {
        $permoney = $row['permoney'];
        $youhuimax = $row['youhuimax'];
        $youhuimoney = $row['youhuimoney'];
    }
} else {
}
$fanka = ($heji / $permoney);





echo "<h4><span class='glyphicon glyphicon-shopping-cart'>计算结果</h4>";
echo "共计消费" . $heji . "元。<br>";
if ($heji >= $permoney) {

    if ($fanka > $youhuimax) {
        $fanka = $youhuimax;
        $youhui = ($youhuimax * $youhuimoney);
        echo "可兑换" . $youhuimoney . "元购物卡" . $fanka . "张，" . "共计优惠" . $youhui . "元。<br>";
        echo "优惠后价格：" . ($heji - $youhui) . "元！<br>";
        # code...
    } else {
        $fanka = floor($heji / $permoney);
        $youhui = ($fanka * $youhuimoney);
        echo "可兑换" . $youhuimoney . "元购物卡" . $fanka . "张，" . "共计优惠" . $youhui . "元。<br>";
        echo "优惠后价格：" . ($heji - $youhui) . "元！<br>";
    }
    # code...
} else {
    echo "在消费" . ($permoney - $heji) . "元就能兑换一张" . $youhuimoney . "购物卡啦！<br>";
}
$youhuiheji = $input0 + $input1 + $input2 + $input3 + $input4 - $youhui;
// echo "共计优惠" . ($heji - $youhuiheji) . "元。";

//  . "<button type='button' class='btn btn-default btn-sm' data-toggle='modal' data-target='#myModal5'>
// <span class='glyphicon glyphicon-zoom-in'></span>优惠细则</button></br>";
echo "本次消费获得积分：" . ($jifenheji - $xianjifen);
echo "<br>累计积分：" . $jifenheji;
echo "<br>";








if (mysqli_num_rows($giftn) > 0) {
    echo "<button type='button' class='btn btn-default btn-sm' data-toggle='modal' data-target='#myModal12'>
    <span class='glyphicon glyphicon-zoom-in'></span>点我查看可兑换礼品</button></br>";
    echo '
<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">可兑换礼品</h4>
            </div>
            <div id="saleinfo12" class="modal-body">
';
$i=1;
    while ($row = mysqli_fetch_assoc($giftn)) {

        echo $i.".".$row['giftname'];
        echo "(".$row['giftpoint'].")<br>";
        $i++;
    }
    echo '

            </div>
    
    
    
        </div>
    </div>
</div>';
}











// 输出数据


echo "<br><br>";



echo "积分明细：<br>";
if ($_POST['select0'] != 0) {
    echo "<span class='glyphicon glyphicon-ok-circle'></span>消费店铺:" . $posn1[0] .
        "<button type='button' class='btn btn-default btn-sm' data-toggle='modal' data-target='#myModal0'>
    <span class='glyphicon glyphicon-zoom-in'></span>店铺活动</button></br>";


    echo "本次积分：" . $jifen0;

    echo "</br>";
}
if ($_POST['select1'] != 0) {


    echo "<span class='glyphicon glyphicon-ok-circle'></span>消费店铺:" . $posn2[0] .
        "<button type='button' class='btn btn-default btn-sm' data-toggle='modal' data-target='#myModal1'>
    <span class='glyphicon glyphicon-zoom-in'></span>店铺活动</button></br>";


    echo "本次积分：" . $jifen1;

    echo "</br>";
}
if ($_POST['select2'] != 0) {


    echo "<span class='glyphicon glyphicon-ok-circle'></span>消费店铺:" . $posn3[0] .
        "<button type='button' class='btn btn-default btn-sm' data-toggle='modal' data-target='#myModal2'>
    <span class='glyphicon glyphicon-zoom-in'></span>店铺活动</button></br>";


    echo "本次积分：" . $jifen2;

    echo "</br>";
}
if ($_POST['select3'] != 0) {

    echo "<span class='glyphicon glyphicon-ok-circle'></span>消费店铺:" . $posn4[0] .
        "<button type='button' class='btn btn-default btn-sm' data-toggle='modal' data-target='#myModal3'>
    <span class='glyphicon glyphicon-zoom-in'></span>店铺活动</button></br>";


    echo "本次积分：" . $jifen3;

    echo "</br>";
}
if ($_POST['select4'] != 0) {


    echo "<span class='glyphicon glyphicon-ok-circle'></span>消费店铺:" . $posn5[0] .
        "<button type='button' class='btn btn-default btn-sm' data-toggle='modal' data-target='#myModal4'>
    <span class='glyphicon glyphicon-zoom-in'></span>店铺活动</button></br>";


    echo "本次积分：" . $jifen4;

    echo "</br>";
}
