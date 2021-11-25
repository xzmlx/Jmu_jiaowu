<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查询课程</title>
</head>
<body>
<table width="350" border="0" align="center">
  <tr>
    <td><a href="showcourse.php">浏览课程</a></td>
    <td ><a href="SearchCourse.php">查询课程</a></td>
    <td ><a href="showchoosed.php">查看已选课程</a></td>
    <td ><a href="../logout.php">退出系统</a></td>
   
  </tr>
</table>
<form method="get" action="SearchCourse1.php">
<h2 align="center">请输入查询信息</h2>
<p align="center">查询&nbsp;<select name="ColumnName">
  <option value="CouNo">课程编号</option>
  <option value="CouName">课程名称</option>
  <option value="Kind">类型</option>
  <option value="Credit">学分</option>
  <option value="Teacher">教师</option>
  <option value="DepartName">开课系部</option>
  <option value="SchoolTime">上课时间</option>
</select>&nbsp;为&nbsp;
	<input type="text" name="keyWord" />的课程
</p>
<p align="center">
<input type="submit" value="确定" />&nbsp;
<input type="reset" value="重置" />
</p>
</form>
<?php include("../footer.php"); ?>
</body>
</html>