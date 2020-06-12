<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>积分工具后台</title>
</head>
<link rel="stylesheet" href="../0527/0527/bootstrap-4.5.0-dist/css/bootstrap.css">
<script src="../0527/0527/layui/jquery-1.7.2.min.js.js"></script>
<script src="../0527/0527/bootstrap-4.5.0-dist/js/bootstrap.js"></script>
<style type="text/css">
	.wrapper {
		width: 1000px;
		margin: 20px auto;
	}

	h2 {
		text-align: center;
	}

	.add {
		margin-bottom: 20px;
	}

	.add a {
		text-decoration: none;
		color: #fff;
		background-color: green;
		padding: 6px;
		border-radius: 5px;
	}

	td {
		text-align: center;
	}
</style>

<body>
	<div class="wrapper">
		<h2>积分工具后台</h2>
		<div class="add">
			<a href="addnews.html">增加店铺</a>
		</div>
		<table width="960" border="1">
			<tr>
				<th>ID</th>
				<!-- 标题 -->
				<th>店铺号</th>
				<!-- 关键字 -->
				<th>店铺名</th>
				<!-- 作者 -->
				<th>店铺活动1</th>
				<!-- 发布时间 -->
				<th>店铺活动2</th>
				<!-- 内容 -->
				<th>店铺活动3</th>
				<th>每百元积分</th>
				<th>操作</th>
			</tr>

			<?php
			require "dbconfig.php";
			// 连接mysql
			// 编码设置

			$link = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT) or die('数据库连接失败');
			mysqli_query($link, "set names 'utf8'");

			// 3. 从DBNAME中查询到news数据库，返回数据库结果集,并按照addtime降序排列  
			$sql = 'select * from possaleinfo order by id asc';
			// 结果集
			$result = mysqli_query($link,$sql);
			// var_dump($result);die;

			// 解析结果集,$row为新闻所有数据，$newsNum为数目
			$newsNum = mysqli_num_rows($result);

			for ($i = 0; $i < $newsNum; $i++) {
				$row = mysqli_fetch_assoc($result);
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>{$row['posnumber']}</td>";
				echo "<td>{$row['posname']}</td>";
				echo "<td>{$row['possale1']}</td>";
				echo "<td>{$row['possale2']}</td>";
				echo "<td>{$row['possale3']}</td>";
				echo "<td>{$row['ye']}</td>";
				echo "<td>
							<a href='javascript:del({$row['id']})'>删除</a>
							<a href='editnews.php?id={$row['id']}'>修改</a>
						  </td>";
				echo "</tr>";
			}
			// 5. 释放结果集
			mysqli_free_result($result);
			mysqli_close($link);
			?>
		</table>
	</div>

	<script type="text/javascript">
		function del(id) {
			if (confirm("确定删除这店铺信息吗？")) {
				window.location = "action-del.php?id=" + id;
			}
		}
	</script>
</body>

</html>