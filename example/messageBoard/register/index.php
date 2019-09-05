<?php
 header('Content-type:text/html;charset=utf-8');  

?>

<!DOCTYPE HTML >
<head>
	<title>注册</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<script type="text/javascript" src="../js/js.js" ></script>
</head>
<body style="width: 90%;margin: auto;">
	<br /><br />	
	
	<form class="form-horizontal" name="regForm" style="padding: 30px 100px 10px;"
		action="registerProcess.php" method="post" onsubmit="return isRegSubmit(this)">

		<fieldset>
			<legend>注册账号</legend>
		</fieldset>

		<div class="form-group">
			<label for="account" class="col-sm-2 control-label">账户：</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="username" placeholder="请输入登录名(学号)">
			</div>
		</div>

		<div class="form-group">
			<label for="password" class="col-sm-2 control-label">密码：</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="password" placeholder="请输入密码">
			</div>
			
		</div>

		<div class="form-group">
			<label for="conpsw" class="col-sm-2 control-label">再输一次：</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" name="password1" placeholder="请再次输入密码">
			</div>
		</div>

		<div class="form-group">
			<label for="nickname" class="col-sm-2 control-label">昵称：(姓名)</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="name" placeholder="请输入昵称">
			</div>
		</div>
		<div class="form-group">
			<label for="nickname" class="col-sm-2 control-label">职务</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="zw" value="成员">
			</div>
		</div>
		<div class="form-group">
			<label for="nickname" class="col-sm-2 control-label">年龄</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="age" value="20">
			</div>
		</div>
		<div class="form-group">
			<label for="nickname" class="col-sm-2 control-label">标签</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="bq" value="编程爱好者">
			</div>
		</div>

		<div class="form-group">
			<label for="sex" class="col-sm-2 control-label">性别：</label>
			<div class="col-sm-4">
				&nbsp; &nbsp;<input type="radio" name="sex"  value="男"
					checked="checked"> &nbsp;男 &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp; &nbsp;<input type="radio" name="sex"  value="女">
				&nbsp;女
			</div>
		</div>

		
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label"></label>
			<div class="col-sm-4">
				<button type="submit" class="btn btn-success" name="submit">注册</button>
				<button type="button" class="btn btn-warning" onclick="clearAllReg(regForm)">清空</button>
				<button type="button" class="btn btn-info" onclick="javascript:history.back(-1);">返回</button>
			</div>
		</div>
	</form>

</body>
