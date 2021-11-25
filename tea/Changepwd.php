<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("Location:../login.php");
	exit();
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>
</head>

<body>
<?php include("header.php"); ?>
<center>
修改密码
<form method="post" action="Changepwd1.php" enctype="multipart/fromdata">
<table>
<tr>
<td>请输入新密码</td>
<td><input type="password" name="Pwd" size="30"></td><td><font color="red">注意：密码为8位数字</font></td>
</tr>
</table>
<input type="submit" value="确定" name="B1">
<input type="reset" value="重置" name="B2">
</form>
</center>
<?php include("../footer.php"); ?>
</body>
</html>