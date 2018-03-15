<?php
 header('Content-type:text/html;charset=utf-8');  

?>

<!DOCTYPE HTML >

<form action="registerProcess.php" method="post">
	用户名：<input type="text" name="username" /><br />
	密 码：<input type="password" name="password" /><br />
	<input type="submit" name="submit" value="注册"/>
</form>