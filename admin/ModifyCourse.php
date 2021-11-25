<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
if(! isset($_GET['CouNo']))
  {$CouNo=001;}
 else{$CouNo=$_GET['CouNo'];} 
if(! isset($_SESSION["username"])){
	header("Location:../login.php");
	exit();
	}
include("../conn/db_conn.php");
include("../conn/db_func.php");
$ShowDetail_sql="select * from course,department where CouNo='$CouNo' and course.DepartNo=department.DepartNo";
$ShowDetailResult=db_query($conn,$ShowDetail_sql);
$row=db_fetch_array($ShowDetailResult,$conn);
$CouNo='0'. strval(intval($row['CouNo'])+1);
$CouName='CouName'. strval(intval($row['CouName']));
$Kind='Kind'. strval(intval($row['Kind']));
$Credit='Credit'. strval(intval($row['Credit']));
$Teacher='Teacher'. strval(intval($row['Teacher']));
$DepartName='DepartName'. strval(intval($row['DepartName']));
$SchoolTime='SchoolTime'. strval(intval($row['SchoolTime']));
$LimitNum='LimitNum'. strval(intval($row['LimitNum']));
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改课程信息</title>
</head>

<body>
<center>
<form method="post" action="ModifyCourse1.php"enctype="multipart/fromdata">
<table width="378">
<tr bgcolor="#0066CC">
  <td colspan="3" columspan="2"><div align="center"><font color="#FFFFFF">课程细节</font></div></td>
</tr>
<tr>
   <td width="81" rowspan="8"><img width='80' height='120' border="0" ></td>
   <td width="89" bgcolor='#DDDDDD'>编号</td>
   <td width="237"><input name="CouNo" type="text" value="<?php echo $row['CouNo']?>" size="3"></td>
</tr>
<tr>
   <td>名称</td>
   <td><input name="CouName" type="text" value="<?php echo $row['CouName']?>" size="20" /></td>
</tr>
<tr>
   <td bgcolor='#DDDDDD'> 类型</td>
   <td><input name="Kind" type="text" value="<?php echo $row['Kind']?>" size="20"></td>
</tr>
<tr>
   <td>学分</td>
   <td><input name="Credit" type="text" value="<?php echo $row['Credit']?>" size="20"></td>
</tr>
<tr>
    <td bgcolor='#DDDDDD'>教师</td>
    <td><input name="Teacher" type="text" value="<?php echo $row['Teacher']?>" size="20"></td>
</tr>
<tr>
    <td bgcolor='#DDDDDD'>上课时间</td>
    <td><input name="SchoolTime" type="text" value="<?php echo $row['SchoolTime']?>" size="20"></td>
</tr>
<tr>
    <td>限定人数</td>
    <td><input name="LimitNum" type="text" value="<?php echo $row['LimitNum']?>" size="20"></td>
</tr>
 <tr align="center">
    <td><input name="B1" type="submit" value="确定" /></td>
    <td><input name="B2" type="reset" value="重置" /></td>
 </tr>
</table>
</form>
</center>
</body>
</html>