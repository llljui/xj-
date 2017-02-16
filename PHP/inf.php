<?php
header("Content_Type:text/plain;charset=utf-8");
//header("Content-Type:application/json;charset=utf-8");
//header("Content-Type:text/html;charset=utf-8");
//header("Content-Type:application/javascript;charset=utf-8");
/*error_reporting(E_ALL & ~E_NOTICE);屏蔽错误*/
//这里是get的请求	
	$someone=array("number"=>"001","name"=>"小明","sex"=>"男","job"=>"挖掘机");
	$staff=array();
	global $staff;
	global $someone;
	$oo=0;
			foreach ($someone as $k=>$v){
					$staff[$oo]=$someone[$k];
					/*echo $staff[$oo];*/
						$oo++;}  	

					function getfn(){  						
						$data=$_GET['data'];
						if ($data=='001'||$data==='小明'||$data==='男'||$data==='挖掘机') {
								echo "查询成功"."<br>".'员工编号:001'."<br>".'员工名字:小明'."<br>".'员工性别:男'."<br>".'员工岗位:挖掘机';						
								}
							else{
								echo '查询失败';} 
							}																	
						
						//这里是post的请求
						function postfn()
						{
						$data=$_POST["data"];	
						if ($data=='001'||$data=='小明'||$data=='男'||$data=='挖掘机') {
								echo "查询成功"."<br>".'员工编号:001'."<br>".'员工名字:小明'."<br>".'员工性别:男'."<br>".'员工岗位:挖掘机';						
								}
							else{
								echo '查询失败';} 
						}		

									    						
   			if( $_SERVER["REQUEST_METHOD"]=="POST") {
						/*echo "post请求成功";*/
						postfn();}

		    else if ($_SERVER["REQUEST_METHOD"]=="GET") {
		    			/*echo "get请求成功";*/
						getfn(); }
		    else {echo "没有请求";   };

?>