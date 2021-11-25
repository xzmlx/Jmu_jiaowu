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
$AddScore_SQL="insert into Score(StuNo,CouNo,Score)values('$StuNo','$CouNo','$Score')";
$AddScore_Result=db_query($conn,$AddScore_SQL);


if($AddScore_Result){
	echo"<script>";
	echo"alert(\"添加成绩成功\");";
	echo"location. href=\"Showchoosed.php\"";
	echo"</script>";
	}else{
	echo"<script>";
	echo"alert(\"添加成绩失败，请重新添加\");";
	echo"location. href=\"Showchoosed.php\"";
	echo"</script>";
		}
?>
</body>
</html>