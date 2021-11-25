<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>完成修改课程操作程序</title>
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
$TeaNo=trim($TeaNo);
$TeaName=trim($TeaName);
$DepartNo=trim($DepartNo);
$UpdateCourse_SQL="update Teacher set TeaNo='$TeaNo',TeaName='$TeaName',DepartNo='$DepartNo' where Teacher.TeaNo='$TeaNo'";
$UpdateCourse_Result=db_query($conn,$UpdateCourse_SQL);

if($UpdateCourse_Result){
	echo"<script>";
	echo"alert(\"课程教师修改成功\");";
	echo"location. href=\"ShowTea.php\"";
	echo"</script>";
	}else{
	echo"<script>";
	echo"alert(\"课程教师修改失败，请重新修改\");";
	echo"location='javascript:history.go(-1)'";
	echo"</script>";
		}
?>
</body>
</html>