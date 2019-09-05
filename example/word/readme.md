#php创建word文档

###使用方法： 
> 首先用 ``` $word->start()```表示要生成word文件了。

>  此时，输出HTML代码，这样既可将HTML内容保存在Word中。 

>  然后用``` $word->save($path)```保存word并且结束.

```html 
//代码
$word=new Word();
$word->start();
//以下内容会保存在WORD文件中，可以使用HTML标签
?>
	<h1>php创建word文档</h1>
	<P>这是PHP创建的文档</p>
<?php
//以上内容会保存在WORD文件中

$word->save("data.doc");//保存word并且结束.
```