<?php
	$passed=$_COOKIE["passed"];
	$account=$_COOKIE["account"];
	if($passed!="TRUE"){
		header("location:20180601.php");
		exit();
	}
	else{
		$link = mysqli_connect("localhost:3301","root","","member") OR die("Error: Unable to connect to MySQL.");
		$sql="select * from users where account='$account'";
		$result = mysqli_query($link,$sql) or die("Connect DB Table Error!");
		$row=mysqli_fetch_assoc($result);
	
?>
<html>
	<head>
		<title>修改會員資料</title>
		<meta http-equiv="Content-Type" content="text/html; charset=big5">
	</head>
	<body background="2018-6.jpg">
		<form action="update.php" method="POST" name="myform">
		<table border="2" align="center" border color="#6666FF">
		<tr>
			<td align="center" colspan="2" bgcolor="#6666FF">
				<font color="#FFFFFF">請填入下列資料</font>
			</td>
		</tr>
		<tr bgcolor="#99FF99">
			<td align="right" >會員帳號:</td>
			<td><?=$row{"account"}?></td>
		</tr>
		<tr bgcolor="#99FF99">
			<td align="right">會員密碼:</td>
			<td><input type="password" name="password" size="15" value="<?=$row{"password"}?>">(請使用英文或數字)</td>
		</tr>
		<tr bgcolor="#99FF99">
			<td align="right">密碼確認:</td>
			<td><input type="password" name="re-password" size="15" value="<?=$row{"re-password"}?>">(請再一次輸入密碼)</td>
		</tr>
		<tr bgcolor="#99FF99">
			<td align="right">姓名:</td>
			<td><input type="text" name="name" size="8" value="<?=$row{"name"}?>"></td>
		</tr>
		<tr bgcolor="#99FF99">
			<td align="right">姓別:</td>
			<td>
			<input type="radio" name="sex" value="男" checked>
			男
			<input type="radio" name="sex" value="女">
			女
			</td>
		</tr>
		<tr bgcolor="#99FF99">
			<td align="right">生日:</td>
			<td>民國
			<input type="text" name="year" size="2" value="<?=$row{"year"}?>">
			年
			<input type="text" name="month" size="2" value="<?=$row{"month"}?>">
			月
			<input type="text" name="day" size="2" value="<?=$row{"day"}?>">
			日
			</td>
		</tr>
		<tr bgcolor="#99FF99">
			<td align="right">行動電話:</td>
			<td><input type="text" name="phone" size="20" value="<?=$row{"phone"}?>"></td>
		</tr>
		<tr bgcolor="#99FF99">
			<td align="right">地址:</td>
			<td><input type="text" name="address" size="45" value="<?=$row{"address"}?>"></td>
		</tr>
		<tr bgcolor="#99FF99">
			<td align="center" colspan="2">
			<input type="button" value="修改資料" onClick="submit()"/>
			</td>
		</tr>
		</table>
		</form>
	</body>
</html>
<?php
mysqli_free_result($result);
mysqli_close($link);
}
?>