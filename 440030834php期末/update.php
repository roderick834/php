<?php
	$passed=$_COOKIE["passed"];
	$account=$_COOKIE["account"];
	if($passed!="TRUE"){
		header("location:20180601.php");
		exit();
	}
	else{
		$account=$_COOKIE["account"];
		$password=$_POST["password"];
		$name=$_POST["name"];
		$sex=$_POST["sex"];
		$year=$_POST["year"];
		$month=$_POST["month"];
		$day=$_POST["day"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$link = mysqli_connect("localhost:3301","root","","member") OR die("Error: Unable to connect to MySQL.");
		$sql="update users set password='$password',name='$name',sex='$sex',year='$year',month='$month',day='$day',phone='$phone',address='$address' where account='$account'";
		$result = mysqli_query($link,$sql) or die("Connect DB Table Error!");
		mysqli_close($link);
	}
?>
<html>
	<head>
		<title>修改會員資料成功</title>
		<meta http-equiv="Content-Type" content="text/html; charset=big5">
	</head>
	<body bgcolor="#FFFFFF">
		<p align="center">
			恭喜你修改資料成功,歡迎下次使用~~
		</p>
		<p align="center">
		<a href="20180601.php">回首頁</a></p>
	</body>
</html>