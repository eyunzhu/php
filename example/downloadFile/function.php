<?php
	header("content-type:text/html;charset=utf8");
	// 文件名不要用中文
	//fname为要下载的文件名
    //$fpath为下载文件所在文件夹，默认是downlod
    function download($fname,$fpath){

        //避免中文文件名出现检测不到文件名的情况，进行转码utf-8->gbk
        $filename=iconv('utf-8', 'gb2312', $fname);
        $path=$fpath.$filename;
        
        if(!file_exists($path)){//检测文件是否存在
            echo "文件不存在！";
            die();
        }

        $fp=fopen($path,'r');//只读方式打开
        $filesize=filesize($path);//文件大小

        //返回的文件(流形式)
        header("Content-type: application/octet-stream");
        //按照字节大小返回
        header("Accept-Ranges: bytes");
        //返回文件大小
        header("Accept-Length: $filesize");
        //这里客户端的弹出对话框，对应的文件名
        header("Content-Disposition: attachment; filename=".$filename);
        //================重点====================
        ob_clean();
        flush();
        //=================重点===================
        //设置分流
        $buffer=1024;
        //来个文件字节计数器
        $count=0;
        while(!feof($fp)&&($filesize-$count>0)){
            $data=fread($fp,$buffer);
            $count+=$data;//计数
            echo $data;//传数据给浏览器端
        }

        fclose($fp);
    }
?>