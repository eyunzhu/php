##cookie记住密码 登录 注销
- 登录页
	- 判断是否设置$_COOKIE['username'],是则显示已登录，否则提示登录
- 登录判断页
	- 判断是否登录成功，是则设置$_COOKIE['username']，
	
```
	//数组：$_COOKIE['profile'] 用于保存用户名及密码	
	$profile='profile['.$username.']';
	setcookie($profile, $password,time()+3600);
	
```

```
//js函数  用于index.php页面自动填充密码
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
```

