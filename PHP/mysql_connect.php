<?php

  $cc=mysql_connect('localhost','root','');
  if (!$cc) {
  	die('连接失败');
  }
else print('success');
	mysql_select_db('class');
    mysql_query('set name utf8' )
/*连接完成*/
	$sql='INSERT INTO student(name,age) VALUES("张三","18")';



?>