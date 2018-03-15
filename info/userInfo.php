<?php
	include '../login/conn.php';
	//开始会话
    session_start();
    header('Content-type:text/html;charset=utf-8');    
    if(isset($_SESSION['username']) ){
        echo "您好！{$_SESSION['username']},欢迎回来！";
        echo "<a href='../login/logout.php'>注销</a>";
    }  else {
        echo "<a href='login.php'>请登入</a>";
    }
   
   
   $result=mysqli_query($conn,"select * from user where username ='{$_SESSION['username']}' ");//查出对应用户名的信息，
    	while ($row=mysqli_fetch_array($result)) {//while循环将$result中的结果找出来 
      		$dbusername=$row["username"]; 
      		$dbpassword=$row["password"]; 
      		$tx=$row["tx"];
      		
   		}
   echo "<br>";
   echo $tx;
   
   
   
    
?>

<br />
<!--<img src="../upload/1/1521112590148.jpeg" height="40px" width="40px"/>-->
<img src="../upload/<? echo $tx;?>" height="40px" width="40px"/>

头像上传：
<form enctype="multipart/form-data" method="post" action="../upload/uploadprocess.php">  
  
<tr><td>请选择你要上传文件：</td><td><input type="file" name="myfile"/></td></tr>  
<tr><td><input type="submit" value="上传文件"/></td><td></td></tr>  

</form> 
