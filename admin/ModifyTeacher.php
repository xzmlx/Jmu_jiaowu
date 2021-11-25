<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
if(! isset($_GET['TeaNo']))
  {$TeaNo=001;}
 else{$TeaNo=$_GET['TeaNo'];} 
if(! isset($_SESSION["username"])){
	header("Location:../login.php");
	exit();
	}
include("../conn/db_conn.php");
include("../conn/db_func.php");
$ShowDetail_sql="select * from teacher where TeaNo='$TeaNo'";
$ShowDetailResult=db_query($conn,$ShowDetail_sql);
$row=db_fetch_array($ShowDetailResult,$conn);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改教师信息</title>
</head>

<body>
<?php include("header.php") ?>
<center>
<form method="post" action="ModifyTeacher1.php"enctype="multipart/fromdata">
<table width="378">
<tr bgcolor="#0066CC">
  <td colspan="3" columspan="2"><div align="center"><font color="#FFFFFF">教师信息细节</font></div></td>
</tr>
<tr>
   <td width="89" bgcolor='#DDDDDD'>教师ID</td>
   <td width="237"><input name="TeaNo" type="text" value="<?php echo $row['TeaNo']?>" size="20"></td>
</tr>
<tr>
   <td>教师名字</td>
   <td><input name="TeaName" type="text" value="<?php echo $row['TeaName']?>" size="20" /></td>
</tr>
<tr>
   <td bgcolor='#DDDDDD'>教师部门</td>
   <td><input name="DepartNo" type="text" value="<?php echo $row['DepartNo']?>" size="20"></td>
</tr>
 <tr align="center">
    <td><input name="B1" type="submit" value="确定" /></td>
    <td><input name="B2" type="reset" value="重置" /></td>
 </tr>
</table>
</form>
</center>
<?php include("../footer.php"); ?>  
</body>
</html>