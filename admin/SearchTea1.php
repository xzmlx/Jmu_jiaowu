<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>结果 -查询教师 -超级管理员</title>
</head>

<body>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("Location:../login.php");
	exit();
}
$keyWord=$_GET['keyWord'];
$ColumnName=$_GET['ColumnName'];
$keyWord=trim($keyWord);
include("../conn/db_conn.php");
include("../conn/db_func.php");
switch($ColumnName)
{
	case "TeaNo";
		$sql="select * from teacher where TeaNo LIKE \"%".$keyWord."%\"";
		break;
	case "TeaName";
		$sql="select * from teacher where TeaName LIKE \"%".$keyWord."%\"";
		break;
	case "DepartNo";
		$sql="select * from teacher where DepartNo LIKE \"%".$keyWord."%\"";
		break;
}
$result=db_query($conn,$sql);
?>

<?php include("header.php"); ?>
<table width="650"  align="center" >
  <tr  bgcolor="#0066CC">
    <td width="80"><font color="#FFFFFF">教师ID</font></td>
    <td width="220" align="center"><font color="#FFFFFF">教师名字</font></td>
    <td width="80"><font color="#FFFFFF">部门类型</font></td>
  </tr>
<?php
if(db_num_rows($result,$conn)>0){
	$number=db_num_rows($result,$conn);
for($i=0;$i<$number;$i++)
	{
		$row=db_fetch_array($result,$conn);
		
		if($i%2==0)
			echo "<tr bgcolor='#dddddd'>";
		else
			echo "<tr>";
		echo "<td width='80'>".$row['TeaNo']."</td>";
?>

 <td width="220" align="center"><?php echo $row['TeaName'] ?></td>
    <td width="80"><?php echo $row['DepartNo']  ?></td>
    </tr>
  
  <?php
	}
}?>
</table>
</body>
</html>