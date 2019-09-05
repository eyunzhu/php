<?php
	include '../login/conn.php';
	//开始会话
    session_start();
    header('Content-type:text/html;charset=utf-8');    
    if(isset($_SESSION['username']) ){
    	
    	if(isset($_SESSION['expiretime'])) {  
  
			    if($_SESSION['expiretime'] < time()) {  
			  
			        unset($_SESSION['expiretime']);  
			  
			        header('Location: logout.php?TIMEOUT'); // 登出  
			  
			        exit(0);  
			  
			    } else {  
			  
			        $_SESSION['expiretime'] = time() + 30; // 刷新时间戳  
			  
			    }  
			  
			}  
    	
    	
        echo "您好！{$_SESSION['username']},欢迎回来！";
        echo "<a href='logout.php'>注销</a>";
    }  else {
        echo "<a href='login.php'>请登入</a>";
    }
?>
<html>
</p>
	
	<?php
		if(isset($_SESSION['username']) ){
        echo $_SESSION['username'];
        
        $result=mysqli_query($conn,"select * from user where username ='{$_SESSION['username']}' ");//查出对应用户名的信息，
    	while ($row=mysqli_fetch_array($result)) {//while循环将$result中的结果找出来 
      		$dbusername=$row["username"]; 
      		$dbpassword=$row["password"]; 
      		$tx=$row["tx"];      		
   		}
   		?>
   		用户信息：
   		<img src="../upload/<? echo $tx;?>" height="40px" width="40px"/>
   		<br />
	<a href="../info/userInfo.php">用户设置</a>
   		<?
   		
   }
   
   
   
   	
	?>
	
	
	
</html>