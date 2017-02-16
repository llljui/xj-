<?php 
	//header("Content-Type:text/plain;charset=utf-8");
	//header("Content-Type:text/html;charset=utf-8");
	//header("Content-Type:application/javascript;charset=utf-8");
	header("Content-Type:application/json;charset=utf-8;");

	$link=mysql_connect("localhost","root","")or die("连接数据库失败");
	mysql_query($link);
	mysql_select_db("vip");
	




    $id_password=array("name"=>"xijiang","password"=>"123");
    $id=$_POST['id'];
    $password=$_POST['password'];
    if ($id===$id_password["name"]and$password===$id_password["password"]) {
    	           echo json_encode("登录成功"); }
    else{          echo json_encode("用户名或者密码错误");    }


?>