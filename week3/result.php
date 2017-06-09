<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="all.css">
		<title>訂購確認-吃貨訂餐網</title>
	</head>
	<body>
		<div class="response">
			<table>
				<tr>
					<td>學號</td>
					<td><?php echo $_POST['student_id'] ?></td>
				</tr>
				<tr>
					<td>姓名</td>
					<td><?php echo $_POST['student_name'] ?></td>
				</tr>
				<tr>
					<td>電話</td>
					<td><?php echo $_POST['student_tel'] ?></td>
				</tr>
				<tr>
					<td>明日餐點</td>
					<td><?php echo $_POST['meal'] ?></td>
				</tr>
				<tr>
					<td>餐點需注意</td>
					<td><?php echo $_POST['notice'] ?></td>
				</tr>
			</table>
		</div>
	</body>

</html>