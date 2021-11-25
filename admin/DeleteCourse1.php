<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
if(! isset($_SESSION["username"])){
	header("Location:..//login.php");
	exit();
	}else if($_SESSION["role"]<>"admin"){
	header("Location:..//login.php");
	exit();
		}
include("../conn/db_conn.php");
include("../conn/db_func.php");
$CouNo=$_GET['CouNo'];

$DeleteCourse_SQL="delete from Course where CouNo='$CouNo'";
$DeleteCourse_Result=db_query($conn,$DeleteCourse_SQL);

if($DeleteCourse_Result){
	echo"<script>";
	echo"alert(\"课程删除成功\");";
	echo"location.href=\"ShowCourse.php\"";
	echo"</script>";
	}else{
	echo"<script>";
	echo"alert(\"课程删除失败，请重新修改\");";
	echo"location.href=\"ShowCourse.php\"";
	echo"</script>";
		}
?>
</body>
</html>

