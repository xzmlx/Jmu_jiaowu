<table align="center">
     <tr>
	 <td><img src="../images/logo.jpg" width = "40" height = "40"/></td><td><a>欢迎使用网上选课系统</a></td>
     </tr>
</table>
<table align="center">
     <tr>
        <td><a href="ShowCourse.php">浏览课程</a></td>
        <td><a href="SearchCourse.php">查询课程</a></td>
        <td><a href="showchoosed.php">浏览所选课程</a></td>
		<td><a href="showscore.php">查成绩</a></td>
		<td width="60" ></td>
        <td><font color="red">用户ID:</font><a><?php echo $_SESSION['username']?></a></td>
        <td><a href="changepwd.php">修改密码</a></td>
        <td><a href="../logout.php">退出系统</a></td>
     </tr>
</table>