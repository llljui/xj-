<?php
header("Content_Type:text/plain;charset=utf-8");
$id=$_POST['ad_id'];
$password=$_POST['ad_psw'];
if ($id==="123"&&$password==='123') {
	echo "登录成功！<br>";
	echo "正在连接...";	
	sleep(1);
	header("location:emp.html");	
}
   
 elseif (empty($id)||empty($password)) {
 	exit("用户名或密码不能为空！<br><a href='emp.html'>返回主页</a>") ;
 }
	else {		
	   echo "用户名或密码错误！<br>";
	   exit("<a href='emp.html'>返回主页</a>");
	  }
?>

