<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>文件上传示例</title>
	</head>
	<script>
		function judgeNull(){
			alert(document.getElementsByName('foldername').value);;
		}
		
		function isSubmit(form){ //表单是否提交
			var foldername=form.foldername.value; 
			var newfile=form.newfile.value;
			if(newfile){
				if(foldername)
					return true;
				else{
					alert("请输入存储文件夹"); 
				return false;
				}
			}				
			else{
				alert("请选择文件"); 
				return false;
			} 
			
			
	}
	</script>
	<body>
		<form action="uploadprocess.php" method="post" enctype="multipart/form-data" onsubmit="return isSubmit(this)">
			<input type="file" name="newfile" /><br />
			<input type="text" name="foldername" placeholder="请输入存储文件夹"/><br />
			<input type="submit" value="上传文件" />
			
		</form>
	</body>
</html>
 