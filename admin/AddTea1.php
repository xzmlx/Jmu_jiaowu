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
$TeaNo=$_POST['TeaNo'];
$TeaName=$_POST['TeaName'];
$DepartNo=$_POST['DepartNo'];
$Pwd=$_POST['Pwd'];

$TeaNo=trim($TeaNo);
$TeaName=trim($TeaName);
$DepartNo=trim($DepartNo);
$Pwd=trim($Pwd);
$AddTeacher_SQL="insert into Teacher values('$TeaNo','$DepartNo','$TeaName','$Pwd')";
$AddTeacher_Result=db_query($conn,$AddTeacher_SQL);


if($AddTeacher_Result){
	echo"<script>";
	echo"alert(\"添加教师成功\");";
	echo"location. href=\"ShowTea.php\"";
	echo"</script>";
	}else{
	echo"<script>";
	echo"alert(\"添加教师失败，请重新添加\");";
	echo"location. href=\"AddTea.php\"";
	echo"</script>";
		}
?>
</body>
</html>