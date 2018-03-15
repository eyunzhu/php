<?php 
	header("Content-Type: text/html; charset=utf8"); 
    //1.接收提交文件的用户  
    //$username=$_POST['username'];  
    //$fileintro=$_POST['fileintro']; 
    
    session_start();
     
//  if(isset($_SESSION['username']) ){
//      echo "您好！{$_SESSION['username']},欢迎回来！";
//      echo "<a href='logout.php'>注销</a>";
//  }  else {
//      echo "<a href='login.php'>请登入</a>";
//  }
    
     
    $username=$_SESSION['username'];  
    $fileintro="fileintro";  
  
    //我们这里需要使用到 $_FILES  
    /*echo "<pre>"; 
    print_r($_FILES); 
    echo "</pre>";*/  
  
    //其实我们在上传文件时，点击上传后，数据由http协议先发送到apache服务器那边，这里apache服务器已经将上传的文件存放到了服务器下的C:\windows\Temp目录下了。这时我们只需转存到我们需要存放的目录即可。  
  
    //php中自身对上传的文件大小存在限制默认为2M  
      
    //获取文件的大小  
    $file_size=$_FILES['myfile']['size'];  
    if($file_size>2*1024*1024) {  
        echo "文件过大，不能上传大于2M的文件";  
        exit();  
    }  
  
    $file_type=$_FILES['myfile']['type'];  
    //echo $file_type;  
    if($file_type!="image/jpeg" && $file_type!='image/pjpeg') {  
        echo "文件类型只能为jpg格式";  
        exit();  
    }  
  
  
    //判断是否上传成功（是否使用post方式上传）  
    if(is_uploaded_file($_FILES['myfile']['tmp_name'])) {  
        //把文件转存到你希望的目录（不要使用copy函数）  
        $uploaded_file=$_FILES['myfile']['tmp_name'];  
  
        //我们给每个用户动态的创建一个文件夹  
        $user_path=__DIR__."/"."$username";  
        //判断该用户文件夹是否已经有这个文件夹  
        if(!file_exists($user_path)) {  
            mkdir($user_path);  
        }  
        
        //$move_to_file=$user_path."/".$_FILES['myfile']['name'];  
        $file_true_name=$_FILES['myfile']['name'];  
        $move_to_file=$user_path."/".time().rand(1,1000).substr($file_true_name,strrpos($file_true_name,"."));  
        //echo "$uploaded_file";
        echo  " $move_to_file";  
        echo "<br/>";
        
        $r_path=explode($user_path,$move_to_file);
       
       	for($index=0;$index<count($r_path);$index++) 
		{ 
			echo $r_path[$index];
			$r_path1=$r_path[$index];
			echo "</br>"; 
		} 
		
       
       
        echo "<br/>";echo "<br/>";
        echo $username.$r_path1;
        
        /*
         * $username 用户名
         * $user_path 用户文件存储路径
         * $move_to_file 完整路径
         */
        
        
        echo "<br/>";echo "<br/>";
        if(move_uploaded_file($uploaded_file,iconv("utf-8","gb2312",$move_to_file))) {  
            echo $_FILES['myfile']['name']."上传成功";
            include '../login/conn.php'; 
            
            
            $tx=$username.$r_path1;
            mysqli_query($conn,"UPDATE user SET tx = '$tx' WHERE username = '$username'");

            echo $move_to_file;
            
             echo "<br/>";echo "<br/>";
        echo $username.$r_path1;
            
            ?>
           <img height="20px" width="20px" src="<? echo $username.$r_path1; ?>"> 
            <?	  
            
        } else {  
            echo "上传失败";  
        }  
    } else {  
        echo "上传失败";  
    }  
  
?>  