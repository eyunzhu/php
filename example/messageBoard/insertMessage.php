<?php
	header("Content-Type: text/html; charset=utf8");
	include("conn.php");
	session_start();	     
	    
	$text=$_POST['text'];
	$name=$_SESSION['name'];
	echo $text;
	$time=date("20y-m-d h:i:sa");
	mysqli_query($conn,"insert into message(username,text,time) values('{$name}','{$text}','{$time}')");
	header('location:index.php');
	
?>