<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看成绩</title>
</head>

<body>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("Location:../login.php");
	exit();
}
include("../conn/db_conn.php");
include("../conn/db_func.php");
$StuNo=$_SESSION['username'];
$sql="select * from course,score where course.CouNo=score.CouNo and StuNo='$StuNo' ";
$result=db_query($conn,$sql);
?>
<table width="350" border="0" align="center">
  <tr>
    <td width="73"><a href="showcourse.php">浏览课程</a></td>
    <td width="73" ><a href="Searchcourse.php">查询课程</a></td>
    <td width="104" ><a href="showchoosed.php">浏览所选课程</a></td>
    <td width="82" ><a href="../logout.php">退出系统</a></td>
   
  </tr>
</table>
<table width="643"  align="center" >
  <tr  bgcolor="#0066CC">
    <td width="108"><font color="#FFFFFF">课程编码</font></td>
    <td width="127" align="center"><font color="#FFFFFF">课程名称</font></td>
    <td width="105"><font color="#FFFFFF">课程类别</font></td>
    <td width="56"><font color="#FFFFFF">学分</font></td>
    <td width="83"><font color="#FFFFFF">任课老师</font></td>
    <td width="136"><font color="#FFFFFF">成绩</font></td>
  </tr>
  <?php

	$number=db_num_rows($result);
	
	
	
	for($i=0;$i<$number;$i++)
	{
		$row=db_fetch_array($result);
		
			if($i%2==0)
			echo "<tr bgcolor='#dddddd'>";
			else
			 echo "<tr>";
			 echo "<td width='80'><a href='CourseDetail.php?CouNo=".$row['CouNo']."'>".$row['CouNo']."</a></td>";
 ?>
             
    <td width="108" align="center"><?php echo $row['CouName'] ?></td>
    <td width="127"><?php echo $row['Kind']  ?></td>
    <td width="105"><?php echo $row['Credit']  ?></td>
    <td width="56"><?php echo $row['Teacher'] ?></td>
    <td width="83"><?php echo $row['score']  ?></td>
    </tr>
    
<?php		
		
	
}
?>
<?php include("../footer.php"); ?>   
</table>
</body>
</html>