<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录界面</title>
<link rel="stylesheet" href="style.css" />
</head>
<body background="images/bg1.jpg">
<div id="bg">
  <div id="logo1">
	<p><img src="images/logo1.png" width="539" height="238" align="middle" /></p>
<div id="center">
  <form method="post" action="Chkadmin.php">
    <table width="231" height="111" border="0" cellpadding="0" cellspacing="0" align="center">
      <caption>
        <h2>诚毅学院管理员登录</h2> 
      </caption>
      <tr>
        <td width="69">用户名:</td>
        <td width="142"><label for="textfield"></label>
        <input name="username" type="text" id="textfield" size="15" /></td>
      </tr>
      <tr>
        <td>密码:</td>
        <td><label for="textfield2"></label>
        <input name="userpwd" type="password" id="textfield2" size="15" /></td>
      </tr>
      <tr>
        <td>身份:</td>
        <td><label for="select">
          <select name="role" size="1">
            <option value="admin">管理员</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td><input type="submit" name="button" id="button" value="提交" /></td>
        <td>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        
          <input type="reset" name="button2" id="button2" value="重置" />
        </td>
      </tr>
    </table>
  </form>
    <p>教师和学生请点击<a href="login.php">这里登陆</a></p>
		</div>
</div>
</center>
<?php include("footer1.php"); ?>  
</body>
</html>