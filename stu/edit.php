<form name="mod_pwd" action="" method="post" onsubmit="return checkinput(this)">
<table cellpadding="0" cellspacing="1">
<tr>
<th class="criteria"> 用户名: </th>
<td><input type="text" name="StuName" size="15" maxlength="15" value="'.get_user(_SESSION['student_id'],'StuName').'"></td>
</tr>
<tr>
<th class="criteria"> 原始密码: </th>
<td><input type="password" name="curr_pwd" size="15" maxlength="15" value="'._POST['curr_pwd'].'"></td> 
</tr>
<tr>
<th class="criteria"> 新密码: </th>
<td><input type="password" name="new_pwd" size="15" maxlength="15" value="'._POST['new_pwd'].'"></td> 
</tr>
<tr>
<th class="criteria"> 确认新密码: </th>
<td><input type="password" name="renew_pwd" size="15" maxlength="15" value="'._POST['renew_pwd'].'">
<input type="submit" name="save" value="Save"></td>
</tr>
</table>
</form>