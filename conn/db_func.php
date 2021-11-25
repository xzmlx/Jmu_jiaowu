<?php
	function db_query($conn,$sqlstr)	{return mysqli_query($conn,$sqlstr);}//执行查询
	function db_num_rows($res)	{return mysqli_num_rows($res);}//函数返回结果集中行的数目
	function db_fetch_array($res)	{return mysqli_fetch_array($res);}//从结果集中取得一行作为数字数组或关联数组
	function db_fetch_object($res,$conn)	{return mysqli_fetch_object($res,$conn);}//函数从结果集中取得当前行，并作为对象返回
	function db_data_seek($res,$num,$conn){return mysqli_data_seek($res,$num,$conn);}//函数调整结果指针到结果集中的一个任意行
?>
