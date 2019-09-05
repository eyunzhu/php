<?php
    session_start();
    header('Content-type:text/html;charset=utf-8');   
    if(isset($_SESSION['username']) ){
        exit('您已经登入了，请不要重新登入');
    }
    
    
    
    if(isset($_POST['submit'])){
    	//包含数据库连接文件
		include 'conn.php';    	
    	$result=mysqli_query($conn,"select * from user where username ='{$_POST['username']}' ");//查出对应用户名的信息，
    	while ($row=mysqli_fetch_array($result)) {//while循环将$result中的结果找出来 
      		$dbusername=$row["username"]; 
      		$dbpassword=$row["password"]; 
   		}   	
   		
        if(isset($_POST['username']) && isset($_POST['password']) && $_POST['username']== $dbusername && $_POST['password']==$dbpassword ){
                $_SESSION['username']=$_POST['username'];
                $_SESSION['expiretime']=time() + 30;
                header('location:skip.php?url=index.php&info=登入成功！3秒后跳转到首面');
                
                
                
                
            
        }  else {
            header('location:skip.php?url=login.php&info=对不起，用户名活密码填写错误！3秒后跳转到登入页面');
        }
    }
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <title>请登入</title>
    </head>
    <body>
        <form method="post" action="">
            姓名：<input type="text" name="username" />
            密码：<input type="password" name="password"/>
            <input type="submit" name="submit" value="登入"/>
        </form>
    </body>
</html>