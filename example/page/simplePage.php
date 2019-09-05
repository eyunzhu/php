<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>简单分页</title>
	</head>
	<body>
		
<?php
		$num_rec_per_page=5;   // 每页显示数量
		$conn = mysqli_connect('localhost','root','root','4zu')or ('error');
		mysqli_query($conn,"set names utf8");
		
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
		$start_from = ($page-1) * $num_rec_per_page; 
		$sql = "SELECT * FROM user LIMIT $start_from, $num_rec_per_page"; 
		$rs_result = mysqli_query($conn,$sql); // 查询数据		
		?> 

<table border="1px solid #cacaca" >
		<?
			while($row=mysqli_fetch_array($rs_result)){				
		?>
		<tr>
			<td>用户：</td><td><? echo $row["username"]; ?></td>
			<td><? echo $row["name"]; ?></td>			
		</tr>
		
		<?
			}
		?>
</table>
<?php 
	$sql = "SELECT * FROM user"; 
	$rs_result = mysqli_query($conn,$sql); //查询数据
	$total_records = mysqli_num_rows($rs_result);  // 统计总共的记录条数
	$total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数
	
	echo "<br/>数据共".$total_records."项";
	echo "<br/>第".$page."页";
	echo "<br/>";
	
	echo "<a href='simplePage.php?page=1'>".'|<'."</a> "; // 第一页
	
	for ($i=1; $i<=$total_pages; $i++) { 
	            echo "<a href='simplePage.php?page=".$i."'>".$i."</a> "; 
	}; 
	echo "<a href='simplePage.php?page=$total_pages'>".'>|'."</a> "; // 最后一页
?>	
	</body>
</html>
