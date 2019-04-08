<?php
	$passed=$_COOKIE["passed"];
	if($passed!="TRUE"){
		header("location:20180601.php");
		exit();
	}
?>
<html>
	<head>
		<title>會員管理</title>
		<meta http-equiv="Content-Type" content="text/html; charset=big5">
	</head>
	<body >
	<p align="center"><img src="2018.jpg"></p>
		<p align="center">
			<a href="modify.php">修改會員資料</a></p>
		<p align="center">
			<a href="delete.php">刪除會員資料</a></p>
		<p align="center">
			<a href="20180601.php">登出</a></p>
		
	</body>
</html>