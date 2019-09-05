<?php
	setcookie("username","$remember",time()-3600);
	header('location:index.php');
?>