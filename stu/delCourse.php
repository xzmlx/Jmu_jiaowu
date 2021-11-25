<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除所选课程</title>
</head>

<body>
<?php
session_start();
if(! isset($_SESSION["username"])){
	header("Location:..//login.php");
	exit();
	}
include("../conn/db_conn.php");
include("../conn/db_func.php");
if(!isset($_POST['StuNo']))
$StuNo=12345678;
else $StuNo=$_POST['StuNo'];
if(!isset($_POST['CouNo']))
$CouNo=$_GET['CouNo'];
else $CouNo=$_POST['CouNo'];
	$DeleteCourse="delete from stucou where CouNo='$CouNo' and StuNo='$StuNo'";
	$DeleteCourse_Result=db_query($conn,$DeleteCourse);
	if($DeleteCourse_Result){
		echo"<script>";
		echo"alert(\"所选课程删除成功\");";
		echo"location.href=\"showchoosed.php\"";
		echo"</script>";
		}else{
	    echo"<script>";
		echo"alert(\"所选课程删除失败，请重新修改\");";
		echo"location.href=\"delCourse.php\"";
		echo"</script>";
	   }
?>
</body>
</html>