<?php

header("Content_Type:text/plain;charset=utf-8");
$someone=array("number"=>"001","name"=>"小明","sex"=>"男","job"=>"挖掘机");
$student=array(
		 array("number"=>"001","name"=>"甲","sex"=>"男","job"=>"挖掘机"),
		 array("number"=>"002","name"=>"乙","sex"=>"男","job"=>"厨师"),
		 array("number"=>"003","name"=>"丙","sex"=>"女","job"=>"教师"),
		 array("number"=>"004","name"=>"丁","sex"=>"女","job"=>"护士"));

$staff=array();
global $staff;
$oo=0;					


			foreach ($student as $k => $v) {
				$i=0;
			(array)$abc[$i]=$student[$k];
			$i++;
			}

			foreach ($abc as $key => $value) {
				echo $abc[$key];
			}
			foreach ($someone as $k=>$v){ 		
					echo  $someone[$k]; 
					$staff[$oo]=$someone[$k];
					$oo++;
						 } 
			for ($i=0; $i <count($staff);$i++) { 
							echo $staff[$i];}	        	
						  								
				for ($i=0; $i < count($staff); $i++) { 
				if ($staff[$i]==$someone['sex']) {
					echo "succ";
					break;
									
										}
				  else{  echo "def";}					          
							          }							          



?>