<?php
	header("content-type:text/html;charset=utf8");
	
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		$sex=$_POST['sex'];
		$zw=$_POST['zw'];
		$age=$_POST['age'];
		$bq=$_POST['bq'];
    	//包含数据库连接文件
		include '../conn.php';  
		
    	$result=mysqli_query($conn,"INSERT INTO user (username, password,name,sex,zw,age,bq)VALUES ('$username', '$password','$name','$sex','$zw','$age','$bq');");
    	if($result){
    		
    		header('location:../skip.php?url=index.php&info=注册成功，跳转到登录页面！');
    	}
}


?>
