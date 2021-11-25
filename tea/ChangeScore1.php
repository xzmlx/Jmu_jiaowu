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
	}else if($_SESSION["role"]<>"teacher"){
	header("Location:student.php");
	exit();
		}
include("../conn/db_conn.php");
include("../conn/db_func.php");
$StuNo=$_POST['StuNo'];
$CouNo=$_POST['CouNo'];
$Score=$_POST['Score'];
$StuNo=trim($StuNo);
$CouNo=trim($CouNo);
$Score=trim($Score);
$UpdateScore_SQL="Update Score set Score='$Score' where StuNo='$StuNo' and CouNo='$CouNo'";
$UpdateScore_Result=db_query($conn,$UpdateScore_SQL);


if($UpdateScore_Result){
	echo"<script>";
	echo"alert(\"修改成绩成功\");";
	echo"location. href=\"Showchoosed.php\"";
	echo"</script>";
	}else{
	echo"<script>";
	echo"alert(\"修改成绩失败，请重新修改\");";
	echo"location. href=\"Showchoosed.php\"";
	echo"</script>";
		}
?>
</body>
</html>