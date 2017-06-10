<?php require_once("connect.php");?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>吃貨訂餐網</title>
		<link rel="stylesheet" href="all.css">	
	</head>
	<body>
		<!--新增訂單-->
		<div class="request">
			<h1>就是要吃！</h1>
			<form action="result.php" method="POST">
				<div class="info">學號</div>
					<input type="text" name="student_id" required>
				<div class="info">姓名</div>
					<input type="text" name="student_name" required>
				<div class="info">電話</div>
					<input type="tel" name="student_tel" required>
				<div class="info">明日餐點</div>
					<span>豬排咖哩飯</span><input type="radio" name="meal" value="豬排咖哩飯" checked>
					<span>牛肉丼飯</span><input type="radio" name="meal" value="牛肉丼飯">
					<span>雞絲涼麵</span><input type="radio" name="meal" value="雞絲涼麵">	
					<span>雞絲涼麵</span><input type="radio" name="meal" value="海鮮粥">	
					<span>水餃</span><input type="radio" name="meal" value="水餃">	
					<span>生魚片</span><input type="radio" name="meal" value="生魚片">	
				<div class="info">餐點需注意</div>
					<textarea name="notice" cols="50" rows="10"></textarea>
				<div class=""><input type="submit" value="訂購"></div>
			</form>
		</div>
		<!--所有訂單-->
		<div class="meal">
			<h2>明日訂單</h2>
			<table>
				<thead>
					<tr>
						<th>學號</th>
						<th>姓名</th>
						<th>電話</th>
						<th>餐點</th>
						<th>餐點需注意</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM meal_order";
						// $sql = "SELECT student_id, student_name, student_tel, meal, notice FROM meal_order";
						$query = mysql_query($sql) or die(mysql_error());
						while($data=mysql_fetch_array($query)){
							echo "<tr><td>".$data["student_id"]."</td>
							<td>".$data['student_name']."</td>
							<td>".$data['student_tel']. "</td>
							<td>".$data['meal']. "</td>
							<td>".$data['notice']. "</td></tr>";
						}

						// while($data=mysqli_fetch_row($query)){
						// 	echo "<tr><td>".$data['student_id']."</td>";
						// 	echo "<td>".$data['student_name']."</td>";
						// 	echo "<td>".$data['student_tel']. "</td>";
						// 	echo "<td>".$data['meal']. "</td>";
						// 	echo "<td>".$data['notice']. "</td></tr>";
						// }

						// while($data=mysqli_fetch_row($query)){
						// 	echo "<tr><td>".$data[0]."</td>";
						// 	echo "<td>".$data[1]."</td>";
						// 	echo "<td>".$data[2]. "</td>";
						// 	echo "<td>".$data[3]. "</td>";
						// 	echo "<td>".$data[4]. "</td></tr>";
						// }
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>
