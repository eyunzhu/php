<?php
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
    	//包含数据库连接文件
		include '../login/conn.php';  
		  	
    	$result=mysqli_query($conn,"INSERT INTO user (username, password)VALUES ('$username', '$username');");
    	if($result){
    		echo "succeed";
    		?>
    		<br/><a href="<? echo "../login/index.php/"?>">登录</a>
    		<?
    	}
}


?>
