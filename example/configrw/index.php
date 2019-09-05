<?php
//引用配置类
require_once 'Config.class.php'; 

$C = new Config('config');

$C->set('site', 'eyunzhu.com'); //设置一个配置
$C->set('siteParam', ["name"=>"忆云竹","other"=>"博客"]); //设置一个数组配置

echo $C->get('url', '默认值');//获取配置'url',没有的话返回默认值   并echo输出
echo "\r\n";
echo $C->get('site', 'abc.com');//输出配置'site'

$allConfig = $C->get();//获取所有配置
print_r($allConfig);


$C->save(); //对以上数据操作进行保存


$C->delete('site');

$allConfig = $C->get();//获取所有配置
print_r($allConfig);