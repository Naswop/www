<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改店铺</title>
</head>
<body>
<?php
require "dbconfig.php";
// 连接mysql
// 编码设置

$link = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
mysqli_query($link, "set names 'utf8'");
    
    $id = $_GET['id'];
    $sql = mysqli_query($link,"SELECT * FROM possaleinfo WHERE id=$id");
    $sql_arr = mysqli_fetch_assoc($sql); 

?>

<form action="action-editnews.php" method="post">
    <label>ID: </label><input type="text" name="id" value="<?php echo $sql_arr['id']?>">
    <label>店铺号：</label><input type="text" name="posnumber" value="<?php echo $sql_arr['posnumber']?>">
    <label>店铺名：</label><input type="text" name="posname" value="<?php echo $sql_arr['posname']?>">
    <label>店铺活动1：</label><input type="text" name="possale1" value="<?php echo $sql_arr['possale1']?>">
    <label>店铺活动2：</label><input type="text" name="possale2" value="<?php echo $sql_arr['possale2']?>">
    <label>店铺活动3：</label><input type="text" name="possale3" value="<?php echo $sql_arr['possale3']?>">
    <label>每百元积分：</label><input type="text" name="ye" value="<?php echo $sql_arr['ye']?>">
    <input type="submit" value="提交">
</form>

</body>
</html>