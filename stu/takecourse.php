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
	header("Location:../login.php");
	exit();
	}
	include("../conn/db_conn.php");
	include("../conn/db_func.php");
	$StuNo=$_POST[StuNo];
	$CouNo=$_POST[CouNo];
	$ShowDetail_sql="select * from stucou where StuNo='$StuNo'";
	$ShowDetailResult=db_query($conn,$ShowDetail_sql);
	if(db_num_rows($ShowDetailResult)<5){
		$WillOrder=db_num_rows($ShowDetailResult)+1;
		$insertCourse="insert into stucou(StuNo,CouNo,WillOrder,State)values('$StuNo','$CouNo','$WillOrder','报名')";
		$insertCourse_Result=db_query($conn,$insertCourse);
		if($insertCourse_Result){
			echo"<script>";
			echo"alert(\"选择课程成功\");";
			echo"location.href=\"showchoosed.php\"";
			echo"</script>";
			}else{
			echo"<script>";
		    echo"alert(\"选择课程失败，请重新选择\");";
			echo"location.href=\"CourseDetail.php\"";	
			echo"</script>";
				}
		}else{
			echo"<script>";
		    echo"alert(\"课程已经选择了五门，请先删除已选课程在选择\");";
			echo"location.href=\"showchoosed.php\"";	
			echo"</script>";
			}
?>
</body>
</html>