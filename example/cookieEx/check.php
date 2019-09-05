<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	 
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$remember = $_POST['remember'];
    	//包含数据库连接文件
		$conn = mysqli_connect('localhost','root','root','tuiguang')or ('error');
		   	
    	$result=mysqli_query($conn,"select * from user where username ='{$_POST['username']}' ");//查出对应用户名的信息，
    	while ($row=mysqli_fetch_array($result)) {//while循环将$result中的结果找出来 
      		$dbusername=$row["username"]; 
      		$dbpassword=$row["password"]; 
   		}   	
   		
        if(isset($_POST['username']) && isset($_POST['password']) && $_POST['username']== $dbusername && $_POST['password']==$dbpassword ){
        //登入成功
        	//设置$_COOKIE['username']有效期为30秒        
            setcookie(username, $password,time()+30);
            if($remember == 1){
			 	$profile='profile['.$username.']';
				setcookie($profile, $password,time()+3600); 
				setcookie('remember',$remember,time()+3600);
			} 
            echo $password;echo $password;
            echo "登入成功";
            header('location:index.php');
            
        }else {
        	//登入失败
        	echo "对不起，用户名活密码填写错误！";
            header('location:index.php');
        }

//	echo "<br>数组\$_COOKIE['profile']中的值";
//	if (is_array($_COOKIE['profile']) || is_object($_COOKIE['profile']))
//	{
//	    foreach($_COOKIE['profile'] as $k=>$v) {
//			echo '<br>用户名:'.$k.'密码：'.$v;	  
//		}
//	}
//	echo '<br/>';
//	print_r(($_COOKIE['profile']));
    
        
    }else{
    	echo "禁止直接访问！";
    } 
?>