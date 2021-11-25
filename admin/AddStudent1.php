<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>完成添加课程操作程序</title>
</head>

<body>
<?php
session_start();
if(! isset($_SESSION["username"])){
	header("Location:index.php");
	exit();
	}else if($_SESSION["role"]<>"admin"){
	header("Location:student.php");
	exit();
		}
include("../conn/db_conn.php");
include("../conn/db_func.php");
$StuNo=$_POST['StuNo'];
$StuName=$_POST['StuName'];
$ClassNo=$_POST['ClassNo'];
$Pwd=$_POST['Pwd'];

$StuNo=trim($StuNo);
$StuName=trim($StuName);
$ClassNo=trim($ClassNo);
$Pwd=trim($Pwd);
$AddStudent_SQL="insert into Student values('$StuNo','$ClassNo','$StuName','$Pwd')";
$AddStudent_Result=db_query($conn,$AddStudent_SQL);


if($AddStudent_Result){
	echo"<script>";
	echo"alert(\"添加学生成功\");";
	echo"location. href=\"ShowStudent.php\"";
	echo"</script>";
	}else{
	echo"<script>";
	echo"alert(\"添加学生失败，请重新添加\");";
	echo"location. href=\"AddStudent.php\"";
	echo"</script>";
		}
?>
</body>
</html>