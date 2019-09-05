<?php
	header("content-type:text/html;charset=utf8");
	$conn = mysqli_connect('localhost','root','root','test')or ('error');
	mysqli_query($conn,"set names utf8");
?>