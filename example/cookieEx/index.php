<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
		function automatic(){
			var username=document.getElementById("username").value;
			<?
			if (is_array($_COOKIE['profile']) || is_object($_COOKIE['profile']))
			{
			    foreach($_COOKIE['profile'] as $k=>$v) {
			?>
				var name1="<? echo $k;?>";
				if(username=="<? echo $k;?>"){
					document.getElementById("password").value="<? echo $v;?>";
				}
				
			<?
			}
			}
			?>
		}
</script>
<?
	if(isset($_COOKIE['username'])){
		echo '您已登录，用户名：'.$_COOKIE['username'];
		echo "<br><a href=\"logout.php\">登出</a>";
	}else{
?>
<form method="post" action="check.php">
	<table width="300" border="1" align="center" cellpadding="0" cellspacing="0">		
	 <tr> 
	 <td colspan="2" align="center"><b>记住用户名和密码</b></td> 
	 </tr>		
	 <tr align="center">
		 <td>用 户 名：</td>
		 <td><input onchange="automatic()" type="text" id="username" value="<?php if(isset($_COOKIE['name'])) echo $_COOKIE['name'];?>" name="username"></td>
	 </tr>
	 <tr align="center">
		 <td>密码：</td>
		 <td><input type="text" id="password" name="password" ></td>
	 </tr>
	 <tr align="center">
		 <td>记住用户名和密码</td>
		 <td>
		 	<?php 
			setcookie('remember','1',time()+3600);
		 		if($_COOKIE['remember'] == 1)
		 		{	
			?>
			<input type="checkbox" name="remember" value="1" checked>
			<?php 
			}else{
				($_COOKIE['remember'] == "")?><input type="checkbox" name="remember" value="1">
			<?php
				}
			?>
		 			
		 </td>
	 </tr>
	 <tr align="center">
	 	<td colspan="2"><input type="submit" name="submit" value="提交" /></td>
	 </tr>
	</table>
</form>
<?		
	}
?>

  

