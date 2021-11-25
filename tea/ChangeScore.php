<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(! isset($_GET['StuNo']))
  {$StuNo=001;}
 else{$StuNo=$_GET['StuNo'];}
 if(! isset($_GET['CouNo']))
  {$CouNo=001;}
 else{$CouNo=$_GET['CouNo'];}
if(! isset($_SESSION["username"])){
	header("Location:..//login.php");
	exit();
	}else if($_SESSION["role"]<>"teacher"){
		header("Location:..//login.php");
		exit();
		}
include("../conn/db_conn.php");
include("../conn/db_func.php");
$ShowDetail_sql="select * from stucou where StuNo='$StuNo' and CouNo='$CouNo'";
$ShowDetailResult=db_query($conn,$ShowDetail_sql);
$row=db_fetch_array($ShowDetailResult);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更改成绩</title>
</head>

<body>
<center>
<?php include("header.php"); ?>
<br>
请准确输入以下信息
<form method="post" action="ChangeScore1.php" enctype="multipart/fromdata">
<table>
<tr>
<td>学生学号</td>
<td><input name="StuNo" type="text" size="30"></td>
</tr>
<tr>
<td>课程编号</td>
<td><input type="text" name="CouNo" size="30"></td>
</tr>
<tr>
<td>成绩</td>
<td><input type="text" name="Score" size="30" /></td>
</tr>
</table>
<table>
<tr>
<td>温馨提示：只有准确输入<font color="red">学生学号</font>和<font color="red">课程编号</font>,而且<font color="red">学生已经选择该课</font>，才能执行修改成绩</td>
</tr>
</table>
<input type="submit" value="确定修改" name="B1">
<input type="reset" value="重置" name="B2">
</form>
</center>
</body>
</html>