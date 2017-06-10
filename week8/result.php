<?php require_once("connect.php");?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>訂購確認-吃貨訂餐網</title>
		<link rel="stylesheet" href="all.css">
	</head>
	<body>
		<div class="response">
			<h1>訂購內容</h1>
			<table>
				<tr>
					<td>學號</td>
					<td><?php echo $student_id = $_POST['student_id'] ?></td>
				</tr>
				<tr>
					<td>姓名</td>
					<td><?php echo $student_name = $_POST['student_name'] ?></td>
				</tr>
				<tr>
					<td>電話</td>
					<td><?php echo $student_tel = $_POST['student_tel'] ?></td>
				</tr>
				<tr>
					<td>明日餐點</td>
					<td><?php echo $meal = $_POST['meal'] ?></td>
				</tr>
				<tr>
					<td>餐點需注意</td>
					<td><?php echo $notice = $_POST['notice'] ?></td>
				</tr>
			</table>
			<!--新增資料-->
			<?php 
				$sql = "INSERT INTO meal_order(student_id, student_name, student_tel, meal, notice) VALUES('$student_id', '$student_name', '$student_tel', '$meal',  '$notice')" ;
				$result = mysqli_query($link, $sql) or die(mysql_error());

			?>
		</div>
	</body>

</html>