<?php
header("Content_Type:charset=utf-8;");
echo "string";
$link=mysql_connect('localhost','root','')or die('连接不成功');
mysql_select_db("student");
mysql_query("set names 'utf8'");
/*$cod1='select * from stu 1'or die("链接失败");
$result=mysql_query($cod1) ;*/
$cod2='insert into stu(number,name )value("002","小东")';
$result=mysql_query($cod2);
$uid=mysql_insert_id();
echo $result;
echo '<br>'.$uid;







?>