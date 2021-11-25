<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员用户登入验证</title>
</head>
<body>
<?php
session_start();

$conn = mysqli_connect('localhost','root','root','xk'); //原include("conn/db_conn.php");链接数据库
//include("conn/db_func.php");
if(!$conn)
  {
    die('数据库连接失败：'.mysqli_error($conn));
   }
mysqli_select_db($conn,'xk');
mysqli_query($conn,"SET NAMES utf8");


$role=$_POST['role'];
$username=trim($_POST['username']);
$userpwd=trim($_POST['userpwd']);
if($role=="admin")
{
	$ChkLogin="select * from admin where adminNo='$username' and Pwd='$userpwd'";
	$result= mysqli_query($conn,$ChkLogin) OR die("<br/>ERROR: <b>".mysqli_error($conn)."</b><br/>产生问题的SQL：".$ChkLogin);
	$row = mysqli_fetch_array($result);
	}
		//$ChkLoginResult=db_query($ChkLogin);//ChkLoginResult=ChkLogin查询
		//$number=db_num_rows($ChkLoginResult);//从结果集获取num函数的行数目
        //$row=db_fetch_array($ChkLoginResult);//从结果集中取得一行作为数字数组或关联数组
		if($row!=0){
			if($role=="admin"){
				$_SESSION["username"]=$username;
				$_SESSION["role"]="admin";
				header("Location:admin/ShowCourse.php");
				}
			}
			
			
			else{
				echo"<script>";
				echo"alert(\"错误的用户名或者密码，请重新登录\");";
				echo"location.href=\"admin.php\"";
				echo"</script>";
				}
				
?>
</body>
</html>