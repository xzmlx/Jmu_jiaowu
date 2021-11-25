<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(! isset($_SESSION["username"])){
	header("Location:..//login.php");
	exit();
	}else if($_SESSION["role"]<>"admin"){
		header("Location:..//login.php");
		exit();
		}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加学生</title>
</head>

<body>
<?php include("header.php"); ?>
<center>
请输入学生信息
<form method="post" action="AddStudent1.php" enctype="multipart/fromdata">
<table>
<tr>
<td>编号</td>
<?php
include("../conn/db_conn.php");
include("../conn/db_func.php");
$adminNo=$_SESSION['username'];
$ShowStudent_sql="select * from student order by StuNo desc";
$ShowStudentResult=db_query($conn,$ShowStudent_sql);
$row=db_fetch_array($ShowStudentResult);
$StuNo=''. strval(intval($row['StuNo'])+1);
?>
<td><input name="StuNo" type="text" value="<?php echo $StuNo?>" size="15"></td>
</tr>
<tr>
<td>学生名字</td>
<td><input type="text" name="StuName" size="30"></td>
</tr>
<tr>
<td>学生班级</td>
<td><input type="text" name="ClassNo" size="30"></td>
</tr>
<tr>
<td>密码</td>
<td><input type="password" name="Pwd" size="8" /></td><td><font color="red">注意：密码为8位数字</font></td>
</tr>
<tr>
</table>
<input type="submit" value="确定" name="B1">
<input type="reset" value="重置" name="B2">
</form>
</center>
</body>
</html>