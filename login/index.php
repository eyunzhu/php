<?php
	//开始会话
    session_start();
    header('Content-type:text/html;charset=utf-8');    
    if(isset($_SESSION['username']) ){
        echo "您好！{$_SESSION['username']},欢迎回来！";
        echo "<a href='logout.php'>注销</a>";
    }  else {
        echo "<a href='login.php'>请登入</a>";
    }
?>
<html>
</p>
	用户信息：
	<?php
		if(isset($_SESSION['username']) ){
        echo $_SESSION['username'];
   }	
	?>
</html>