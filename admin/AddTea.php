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
<title>添加教师</title>
</head>

<body>
<?php include("header.php"); ?>
<center>
请输入教师信息
<form method="post" action="AddTea1.php" enctype="multipart/fromdata">
<table>
<tr>
<td>编号</td>
<?php
include("../conn/db_conn.php");
include("../conn/db_func.php");
$adminNo=$_SESSION['username'];
$ShowTeacher_sql="select * from teacher order by TeaNo desc";
$ShowTeacherResult=db_query($conn,$ShowTeacher_sql);
$row=db_fetch_array($ShowTeacherResult);
$TeaNo=''. strval(intval($row['TeaNo'])+1);
?>
<td><input name="TeaNo" type="text" value="<?php echo $TeaNo?>" size="15"></td>
</tr>
<tr>
<td>教师名字</td>
<td><input type="text" name="TeaName" size="30"></td>
</tr>
<tr>
<td>教师部门</td>
<td>
  <select name="DepartNo">
     <option value="00">00通信工程</option>
     <option value="01">01自动化</option>
     <option value="02">02信息工程</option>
     <option value="03">03电子科学与技术</option>
	 <option value="04">04电气工程及其自动化</option>
  </select>
</td>
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