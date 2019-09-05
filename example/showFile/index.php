<meta charset="utf-8" />
<div id="jQ-menu">   
   
<?php  
	header("content-type:text/html;charset=gb2312");
    $path = "./";  
  	//$filename=iconv('utf-8', 'gb2312', $fname);
    function createDir($path = '.')  
    {     
        if ($handle = opendir($path))   
        {  
            echo "<ul>";  
          
            while (false !== ($file = readdir($handle)))   
            {  
                if (is_dir($path.$file) && $file != '.' && $file !='..')  
                    //printSubDir($file, $path, $queue);  
                    printSubDir($file, $path);
                else if ($file != '.' && $file !='..')  
                    $queue[] = $file;  
            }  
              
            printQueue($queue, $path);  
            echo "</ul>";  
        }  
    }  
      
    function printQueue($queue, $path)  
    {  
        foreach ($queue as $file)   
        {  
            printFile($file, $path);  
        }   
    }  
      
    function printFile($file, $path)  
    {  
        echo '<li><a href="'.$path.$file. '">'.$file.'</a></li>';  
    }  
      
    function printSubDir($dir, $path)  
    {  
        echo "<li><span class=\"toggle\">".$dir."</span>";  
        createDir($path.$dir."/");  
        echo "</li>";  
    }  
      
    createDir($path);  
?>  
  
</div>   