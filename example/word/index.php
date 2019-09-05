<?php
include("class.word.php");
$word=new Word();
$word->start();
//以下内容会保存在WORD文件中，可以使用HTML标签
?>
 <h1>php创建word文档</h1>
<hr size=1>
<p>如果你打开data.doc，看到了这里的介绍，则说明word文档创建成功了。
<b>使用方法：</b>
<br>
首先用$word->start()表示要生成word文件了。
此时，输出HTML代码，这样既可将HTML内容保存在Word中。
然后用$word->save($path)保存word并且结束.其中$path是你想
生成的word文件的名称（可以给出完整的路径）.当你使用了$word->save()
方法后，这后面的任何输出都和word文件没有关系了，也就是说word的生成
工作就完成了。之后就和你平常使用php的方式一样拉。随便你输出什么东西，
都直接在浏览器里输出，而不会写到word里面去。
<br><br>哈哈，很有意思吧？享受它吧！
<hr size=1>
<?php
//以上内容会保存在WORD文件中

$word->save("data.doc");//保存word并且结束.
//以下内容正常输出在页面文件中
header("Content-type:text/html;charset=utf-8");
echo 'data.doc生成成功，请到目录下查看<br>';
?>