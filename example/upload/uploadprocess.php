<?php 
	header("Content-Type: text/html; charset=utf8");
	
	//保存到$foldername文件夹下     
    $foldername=$_POST['foldername'];

    //我们这里需要使用到 $_FILES  
    /*echo "<pre>"; 
    print_r($_FILES); 
    echo "</pre>";  */
  
    //其实我们在上传文件时，点击上传后，数据由http协议先发送到apache服务器那边，这里apache服务器已经将上传的文件存放到了服务器下的C:\windows\Temp目录下了。这时我们只需转存到我们需要存放的目录即可。  
  
    //php中自身对上传的文件大小存在限制默认为2M      
    //获取文件的大小  
    $file_size=$_FILES['newfile']['size'];  
    if($file_size>2*1024*1024) {  
        echo "文件过大，不能上传大于2M的文件";  
        exit();  
    }  
  
    $file_type=$_FILES['newfile']['type'];  
    //echo $file_type;  
    if($file_type!="image/jpeg" && $file_type!='image/pjpeg' && $file_type!="image/png" && $file_type!="image/gif") {  
        echo "文件类型只能为jpg,png,gif格式";  
        exit();  
    }    
    //判断是否上传成功（是否使用post方式上传）  
    if(is_uploaded_file($_FILES['newfile']['tmp_name'])) {  
        //把文件转存到你希望的目录（不要使用copy函数）  
        $uploaded_file=$_FILES['newfile']['tmp_name'];  
  
        //我们给每个用户动态的创建一个文件夹  
        $user_path="uploadFile/"."$foldername";  
        //判断该用户文件夹是否已经有这个文件夹  
        if(!file_exists($user_path)) {  
            mkdir($user_path);  
        }  
        
        
        $file_true_name=$_FILES['newfile']['name'];  
        $move_to_file=$user_path."/".time().rand(1,1000).substr($file_true_name,strrpos($file_true_name,"."));  
        
        $r_path=explode($user_path,$move_to_file);
       
       	for($index=0;$index<count($r_path);$index++) 
		{ 
			$r_path1=$r_path[$index];
		} 
		
        if(move_uploaded_file($uploaded_file,iconv("utf-8","gb2312",$move_to_file))) {  
            echo $_FILES['newfile']['name']."上传成功";
            ?>
           <img height="20px" width="20px" src="<? echo $user_path.$r_path1; ?>"> 
            <?	  
            
        } else {  
            echo "上传失败";  
        }  
    } else {  
        echo "上传失败";  
    }  
  
?>  