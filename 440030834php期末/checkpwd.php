<?php
$account=$_POST["account"];
$password=$_POST["password"];

$link = mysqli_connect("localhost:3301","root", "", "member") OR die("Error: Unable to connect to MySQL.");
$sql="select * from users where account='$account' AND password='$password'";
$result = mysqli_query($link,$sql) or die("Connect DB Table Error!");

if(mysqli_num_rows($result)==0){
	mysqli_free_result($result);
	mysqli_close($link);
	echo "<script language ='javascript'>";
	echo "alert('帳號密碼錯誤~~');";
	echo "history.back();";
	echo "</script>";
	
}
else{
	//$account=mysql_result($result,0,"account");
	mysqli_free_result($result);
	mysqli_close($link);
	setcookie("account",$account);
	setcookie("passed","TRUE");
	
	header("location:main.php");
}
?>