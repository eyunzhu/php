<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	//文档编码格式设置
	header("Content-type:text/html;charset=utf8");
	//数据库连接
	$conn=mysqli_connect('localhost','root','root','test');
	//设置数据库查询编码
	mysqli_query($conn,"set names utf8");
	//数据库查询
	$result=mysqli_query($conn,"select * from test where username ='{$username}' ");
	if($row=mysqli_fetch_array($result)){
		if($password==$row['password'])
			echo '登录成功';
		else echo '密码错误';
	}else echo '无此用户';
		
	mysqli_close($conn);
?>