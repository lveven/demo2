<?php 
    /**
	*autor lveven
	*格式化打印数据 自定义工具库
	*@param mixed $data
	*@return 
	*/
	if(!function_exists('lveven_d')){
		function lveven_d($data){
		   echo "<pre>";
		   print_r($data);
		}
	}
?>