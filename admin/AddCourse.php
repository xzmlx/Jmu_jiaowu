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
<title>添加课程</title>
</head>

<body>
<?php include("header.php"); ?>
<center>
请输入课程信息
<form method="post" action="AddCourse1.php" enctype="multipart/fromdata">
<table>
<tr>
<td>编号</td>
<?php
include("../conn/db_conn.php");
include("../conn/db_func.php");
$adminNo=$_SESSION['username'];
$ShowCourse_sql="select * from course order by CouNo desc";
$ShowCourseResult=db_query($conn,$ShowCourse_sql);
$row=db_fetch_array($ShowCourseResult);
$CouNo='0'. strval(intval($row['CouNo'])+1);
?>
<td><input name="CouNo" type="text" value="<?php echo $CouNo?>" size="3"></td>
</tr>
<tr>
<td>名称</td>
<td><input type="text" name="CouName" size="30"></td>
</tr>
<tr>
<td>类型</td>
<td>
  <select name="Kind">
     <option value="信息技术">信息技术</option>
     <option value="工程技术">工程技术</option>
     <option value="人文">人文</option>
     <option value="管理">管理</option>
  </select>
</td>
</tr>
<tr>
<td>学分</td>
<td><input type="text" name="Credit" size="2" /></td>
</tr>
<tr>
<td>教师</td>
<td><input type="text" name="Teacher" size="20" /></td>
</tr>
<tr>
<td>上课时间</td>
<td><input type="text" name="SchoolTime" size="20" /></td>
</tr>
<tr>
<td>限定人数</td>
<td><input type="text" name="LimitNum" size="20" /></td>
</tr>
<tr>
<td>图片</td>
<td><input type="text" name="photo" size="20" /></td>
</tr>
</table>
<input type="submit" value="确定" name="B1">
<input type="reset" value="重置" name="B2">
</form>
</center>
</body>
</html>