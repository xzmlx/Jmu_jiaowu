<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(! isset($_SESSION["username"])){
	header("Location:..//login.php");
	exit();
	}else if($_SESSION["role"]<>"admin"){
		header("Location:..//login.php");
		exit();
		}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加学生</title>
</head>

<body>
<?php include("header.php"); ?>
<script>

function import_check(){
    var f_content = form1.file.value; 
    var fileext=f_content.substring(f_content.lastIndexOf("."),f_content.length)
        fileext=fileext.toLowerCase()
     if (fileext!='.txt')
        {
         alert("对不起，导入数据格式必须是txt格式文件，请您重新上传 !");            
         return false;
        }
}
</script>

<center>
  <strong>学生信息导入</strong>
    <form method="post" action="AddStudent1.php" enctype="multipart/fromdata">
<table style="margin-top:20px; border:1px solid #9abcde;">
<tr>
<td>编号</td>
<?php
include("../conn/db_conn.php");
include("../conn/db_func.php");
$adminNo=$_SESSION['username'];
$ShowStudent_sql="select * from student order by StuNo desc";
$ShowStudentResult=db_query($conn,$ShowStudent_sql);
$row=db_fetch_array($ShowStudentResult);
$StuNo=''. strval(intval($row['StuNo'])+1);
?>
<td><input name="StuNo" type="text" value="<?php echo $StuNo?>" size="15"></td>
</tr>
<tr>
<td>学生名字</td>
<td><input type="text" name="StuName" size="30"></td>
</tr>
<tr>
<td>学生班级</td>
<td><input type="text" name="ClassNo" size="30"></td>
</tr>
<tr>
<td>密码</td>
<td><input type="password" name="Pwd" size="8" /></td><td><font color="red">注意：密码为8位数字</font></td>
</tr>
<tr>
</table>
<input type="submit" value="确定" name="B1">
<input type="reset" value="重置" name="B2">
</form>
</center>

<table width="43%" border="0" align="center" style="margin-top:20px; border:1px solid #9abcde;">
    <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="batchapp.php">
    
        <tr >
            <td height="28" colspan="2" align="center"><label>  <strong>批量学生信息导入</strong></label></td>
        </tr>
        <tr>
            <td width="18%" height="50"> 选择txt文件</td>
            <td width="82%"><label>
            <input name="file" type="file" id="file" size="50" />
            </label>
                <label>
                <input name="button" type="submit" class="nnt_submit" id="button" value="导入数据"    onclick="return import_check();"/>
                </label>
</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="red">  [<span class="STYLE1">注</span>]数据导入格式说明:</td>
        </tr>
        <tr>
            <td colspan="2">    1、导入数据表文件必须是<strong>TXT</strong>文件格式</td>
        </tr>
        <tr>
            <td colspan="2">  2、txt文件数据格式为:学号,班级,姓名,密码</td>
        </tr>
        <tr>
            <td colspan="2"> </td>
        </tr></form>
    </table>
	
</body>
</html>