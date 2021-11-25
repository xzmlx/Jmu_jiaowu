<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
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
	case "CouNo";
		$sql="select * from course where CouNo LIKE \"%".$keyWord."%\"";
		break;
	case "CouName";
		$sql="select * from course where CouName LIKE \"%".$keyWord."%\"";
		break;
	case "Kind";
		$sql="select * from course where Kind LIKE \"%".$keyWord."%\"";
		break;
	case "Credit";
		$sql="select * from course where Credit LIKE \"%".$keyWord."%\"";
		break;
	case "Teacher";
		$sql="select * from course where Teacher LIKE \"%".$keyWord."%\"";
		break;
	case "DepartName";
		$sql="select * from course,Department where course.DepartNo=Department.DepartNo and DepartName LIKE \"%".$keyWord."%\"";
		break;
	case "SchoolTime";
		$sql="select * from course where SchoolTime LIKE \"%".$keyWord."%\"";
		break;
}
$result=db_query($conn,$sql);
?>

<?php include("header.php"); ?>
<table width="650"  align="center" >
  <tr  bgcolor="#0066CC">
    <td width="80"><font color="#FFFFFF">课程编码</font></td>
    <td width="220" align="center"><font color="#FFFFFF">课程名称</font></td>
    <td width="80"><font color="#FFFFFF">课程类别</font></td>
    <td width="50"><font color="#FFFFFF">学分</font></td>
    <td width="80"><font color="#FFFFFF">任课老师</font></td>
    <td width="120"><font color="#FFFFFF">上课时间</font></td>
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
		echo "<td width='80'><a href='CourseDetail.php?CouNo=".$row['CouNo']."'>".$row['CouNo']."</a></td>";
?>

 <td width="220" align="center"><?php echo $row['CouName'] ?></td>
    <td width="80"><?php echo $row['Kind']  ?></td>
    <td width="50"><?php echo $row['Credit']  ?></td>
    <td width="80"><?php echo $row['Teacher'] ?></td>
    <td width="120"><?php echo $row['SchoolTime']  ?></td>
    </tr>
  
  <?php
	}
}?>
</table>
</body>
</html>