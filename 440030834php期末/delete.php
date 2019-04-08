<?php
	$passed=$_COOKIE["passed"];
	$account=$_COOKIE["account"];
	if($passed!="TRUE")
	{
		header("location:20180601.php");
		exit();
	}
	else
	{
		$link = mysqli_connect("localhost:3301","root","","member") OR die("Error: Unable to connect to MySQL.");
		$sql="delete from users where account='$account'";
		$result = mysqli_query($link,$sql) or die("Connect DB Table Error!");
		mysqli_close($link);
	}
?>
<html>
	<head>
		<title>刪除會員資料</title>
		<meta http-equiv="Content-Type" content="text/html; charset=big5">
	</head>
	<body bgcolor="#FFFFFF">
		<p align="center">
			資料已經從本站刪除~~
		</p>
		<p align="center">
		<a href="20180601.php">回首頁</a></p>
	</body>
</html>