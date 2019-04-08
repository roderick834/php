<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=big5">
		<title>會員登入</title>
		
	</head>
	<body background="2018-6.jpg">
		<p align="center"><img src="2018.jpg"></p>
		<form action="checkpwd.php" method="POST" name="myform">
		<table width="40%" align="center">
		<tr>
			<td align="center">
				<font color="#FFFFFF" size="6">帳號:</font>
				<input type="text" name="account" size="15" />
			</td>
		</tr>
		<tr>
			<td align="center">
				<font color="#FFFFFF" size="6">密碼:</font>
				<input type="password" name="password" size="15" />
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="button" value="登入" onClick="submit()" />
			</td>
		</tr>
		</table>
		</form>
		<p align="center">
			<a href="add.html">建立帳戶</a></p>
	</body>
</html>
