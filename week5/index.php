<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>世界末日倒數</title>
		<link rel="stylesheet" href="all.css">
	</head>
	<body>
		<!--現在時間-->
		<div class="now">
			<p>現在時間：</p>
			<?php 
				date_default_timezone_set('Asia/Taipei');
				$datetime = date('Y-m-d H:i:s');
			?>
			<!--年、月、日、時、分、秒、星期-->
			<p><?php echo $datetime;
				echo "\t";
				echo date("l");?>
			</p>
		</div>
		<!--世界末日倒數-->
		<div class="count">
			<p>距離世界末日(2017-12-31 00:00:00)：</p>
			<?php 
				$mysettime= date("2017-12-31 00:00:00"); 
				echo $day = floor((strtotime($mysettime) - strtotime($datetime))/ (60*60*24))."天";
				echo $hour = floor(((strtotime($mysettime) - strtotime($datetime))/ (60*60*24) - $day)*24)."時";
				echo $min = floor(((((strtotime($mysettime) - strtotime($datetime))/ (60*60*24) - $day)*24) - $hour)*60)."分";
				echo $sec = floor(((((((strtotime($mysettime) - strtotime($datetime))/ (60*60*24) - $day)*24) - $hour)*60) - $min)*60)."秒";
			?>
		</div>
		<!--每月顯示不同圖片-->
		<div class="month">
			<?php 
				echo $month = date('m')."月份的圖片";  
				switch ($month) {
					case 1:
						echo "<img src=pic/month1.png>";
						break;
					case 2:
						echo "<img src=pic/month2.png>";
						break;
					case 3:
						echo "<img src=pic/month3.png>";
						break;
					case 4:
						echo "<img src=pic/month4.png>";
						break;
					case 5:
						echo "<img src=pic/month5.png>";
						break;
					case 6:
						echo "<img src=pic/month6.png>";
						break;
					case 7:
						echo "<img src=pic/month7.png>";
						break;
					case 8:
						echo "<img src=pic/month8.png>";
						break;
					case 9:
						echo "<img src=pic/month9.png>";
						break;
					case 10:
						echo "<img src=pic/month10.png>";
						break;
					case 11:
						echo "<img src=pic/month11.png>";
						break;
					case 12:
						echo "<img src=pic/month12.png>";
						break;
					default:
						echo "There is something wrong!";
						break;
				}
			?>

		</div>
	</body>
</html>

