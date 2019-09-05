# 基础篇

## 了解大部分数组处理函数
[PHP 5 Array 函数](https://www.runoob.com/php/php-ref-array.html)

	array_shift()  删除第一个
	array_unshift()  在首添加
	array_pop()	删除最后一个
	array_push()	在尾部压入
	array_unique()	删除重复
	trim() 移除字符串两侧的字符
	ltrim() 移除字符串左边字符
	rtrim() 移除字符串右边字符
	asort()	按照值升序
	arsort()	按照值降序
	ksort()	按照键名升序
	krsort()	按照键名降序

## 字符串处理函数
	str_replace() 替换
	strlen() 字符串的长度
	str_word_count() 单词数量
	strrev() 函数反转字符串
	strpos() 则会返回首个匹配的字符位置
	
	


### `echo,print,print_r,var_dump` 的区别
1. `echo()` 输出字符串。实际不是一个函数,无返回值
2. `print()` 只能打印简单类型变量，有返回值，显示成功时返回1
3. `print_r($expression ,$return)`
	> `$return`默认为false,为false时，打印输出结果，返回1。
	> 当$return为`true`时不打印输出结果，将结果返回。
4. var_dump() 函数用于输出变量的相关信息，没有返回值

##### 总结
1. echo,var_dump 无返回值;print,print_r有返回值
2. echo,print,print_r  没法打印布尔型，如果true，打印1，false和null打印为空。
3. print_r 可打印
4. var_dump 打印参数类型，长度，值,可打印布尔值，null

