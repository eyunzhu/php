<!DOCTYPE html>
<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<meta charset="utf-8" />
		<title>美化的分页</title>
	</head>
<body style="width: 90%;margin: auto;">
	<table class="table table-striped">
  		<tr>
  			<th>序号</th>
  			<th>留言</th>
  			<th>昵称</th>
  			<th>时间</th>
  		</tr>
  		<?
  			header("Content-Type: text/html; charset=utf8");
  			//数据库连接
			$conn = mysqli_connect('localhost','root','root','4zu')or ('error');
			mysqli_query($conn,"set names utf8");
	  		$num_rec_per_page=5;   // 每页显示数量
			if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
			if (isset($_GET["group"])) { $group  = $_GET["group"]; } else { $group=1; };
			$start_from = ($page-1) * $num_rec_per_page; 
			$sql = "SELECT * FROM message order by Id desc LIMIT $start_from, $num_rec_per_page "; 
			$result = mysqli_query($conn,$sql); // 查询数据
			
			while($row=mysqli_fetch_array($result)){
			?>
  		<tr>
  			<td><? echo $row['Id']; ?></td>
  			<td><? echo $row['text']; ?></td>
  			<td><? echo $row['username']; ?></td>
  			<td><? echo $row['time']; ?></td>  			
  		</tr>
  		<?  
		  }			
		?>
  		
	</table>
<?
$sql = "SELECT * FROM message"; 
$rs_result = mysqli_query($conn,$sql); //查询数据
$total_records = mysqli_num_rows($rs_result);  // 统计总共的记录条数
$total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数
$num_rec_per_group=3;// 每页组显示页数量
$total_groups=ceil($total_pages / $num_rec_per_group);  // 计算总页组数

echo "<br/>数据共".$total_records."项";
echo "<br/>数据共".$total_pages."页";
echo "<br/>数据共".$total_groups."页组";
echo "<br/>现在是第".$page."页";
echo "<br/>";
?>

<nav >
  <ul class="pager">
    <li><a href="beautifyPage.php?page=1">首页</a></li>
    <li><a href="beautifyPage.php?page=<? echo $total_pages;?>&group=<?echo $total_groups; ?>">尾页</a></li>
  </ul>
</nav>
<nav aria-label="Page navigation" style="text-align: center;">
  <ul   class="pagination">
  	<?
  		if($group==1){
  	?>
	  	<li aria-label="Previous" class="disabled">	      
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
  	<?
  		}else{
  	?>
	  	<li aria-label="Previous">
	      <a href="beautifyPage.php?group=<?echo $group-1; ?>&page=<?echo ($group-2)*$num_rec_per_group+1; ?>" >
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
  	<?
  		}
  	?>
  	
    <?
    	//$group=;//页组
    	//$num_rec_per_group=3;// 每页组显示页数量
    	for ($i=1; $i<=$total_pages; $i++) {
    		
    		if($i<=$group*$num_rec_per_group && ($group-1)*$num_rec_per_group<$i){
    			if($page==$i) {
	    			echo "<li class=\"active\"><a href='beautifyPage.php?page=".$i."'>".$i."</a></li> ";  
	    		}else{    			
	    			echo "<li><a href='beautifyPage.php?page=".$i."'>".$i."</a></li> "; 
	    		}
    		}          
		};
    ?>
    
    <?
  		if($group==$total_groups){
  	?>
	  	<li aria-label="Next" class="disabled">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  	<?
  		}else{
  	?>
	  	<li aria-label="Next">
      <a href="beautifyPage.php?group=<?echo $group+1; ?>&page=<?echo ($group)*$num_rec_per_group+1; ?>" >
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  	<?
  		}
  	?>
  </ul>
</nav>

<?
	mysqli_close($conn);
?>

</body>
</html>