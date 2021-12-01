<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>批量添加学生</title>
</head>

<body>

<?
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

if($_POST){
$mydate=file($_FILES["file"]["tmp_name"]);
require('../conn/db_conn.php');
mysqli_select_db($conn,'xk'); 
} 
$n=count($mydate);
for($i=0;$i<$n;$i++){
$date=explode(",",$mydate[$i]);

$AddStudent_SQL="insert into Student(StuNo,ClassNo,StuName,Pwd)values('".$date[0]."','".$date[1]."','".$date[2]."','".$date[3]."')";
$AddStudent_Result=db_query($conn,$AddStudent_SQL);
}
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
<a href="AddStudent.php">返回页面</>
</body>
</html>