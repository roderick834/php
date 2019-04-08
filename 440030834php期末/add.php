<?php
$account=$_POST["account"];
$password=$_POST["password"];
$name=$_POST["name"];
$sex=$_POST["sex"];
$year=$_POST["year"];
$month=$_POST["month"];
$day=$_POST["day"];
$phone=$_POST["phone"];
$address=$_POST["address"];

$link = mysqli_connect("localhost:3301","root", "", "member") OR die("Error: Unable to connect to MySQL.");
mysqli_set_charset($link, "utf8");

$sql="select * from users where account='$account'";
$result = mysqli_query($link, $sql) or die("Connect DB Table Error!");

if(mysqli_num_rows($result)!=0) //帳號已有人用
{
	mysql_free_result($result);
	echo "<script language ='javascript'>";
	echo "alert('帳號已有人用~~');";
	echo "history.back();";
	echo "</script>";
}
else 
{
	mysqli_free_result($result);
	$sql="INSERT INTO `users`(`account`,`password`,`name`,`sex`,`year`,`month`,`day`,`phone`,`address`)VALUES('$account','$password','$name','$sex','$year','$month','$day','$phone','$address')";
	$result = mysqli_query($link, $sql) or die("Connect DB Table Error!");
}

mysqli_close($link);
?>
<html>
	<head>
		<title>新增帳號成功</title>
	</head>
	<body >
		<p align="center">
		新增成功</p>
		<p align="center"><a href="20180601.php">登入網站</a></p>
		
	</body>
</html>