<?php
	header('Content-type:text/html;charset=utf-8'); 	
	$conn=mysqli_connect('localhost','root','root','test');
	if (mysqli_connect_errno($conn)) 
		echo "连接 MySQL 失败: " . mysqli_connect_error(); 
	else echo "连接 MySQL 成功".'<br>'; 
       
	mysqli_query($conn,'set names utf8');
	
	$sql="DROP TABLE IF EXISTS `www`;
CREATE TABLE `www` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
INSERT INTO `www` VALUES (1,'20154071101','123','男'),(2,'20154071102','123','男'),(3,'20154071103','123','男');";	
	
	$sql_array=preg_split("/;[\r\n]+/", $sql);
		$flag=true;
        foreach ($sql_array as $k => $v) {  
           mysqli_query($conn,$v);
			if(mysqli_error($conn)){//出错
				echo mysqli_error($conn).'<br>';
				$flag=false;
			}				
			else echo "查询成功".'<br>';           
        }
		if($flag)		
			echo "恭喜*数据库创建成功";
		else
			echo "抱歉*数据库创建失败(有错误)";	
   		
	mysqli_close($conn); 
	  	
?>	