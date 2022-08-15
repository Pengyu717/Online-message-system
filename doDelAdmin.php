<style type="text/css">
body {
	background-image: url(../wallpaper/img31.jpg);
}
</style>
<title>执行删除操作成功</title>
<?php

	if(!isset($_GET['k'])){
		//k没传过来直接跳回
		header("location:show.php");
		die;
	}
	
	$k=$_GET['k'];
	
	//读文件
	$info=rtrim(file_get_contents("ly.db"),"@");
	
	//拆分
	$list=explode("@@",$info);
	
	//删除
	unset($list[$k]);
	
	if(count($list)>0){
		//数组转字符串回填到db文件
		file_put_contents("ly.db",implode("@@",$list)."@@");
	}else{
		//数组为空回填一个空字符
		file_put_contents("ly.db","");
	}
	
	echo "执行删除操作完成！  Copyright © 2021-2022 版权所有 ";
	header("refresh:1;url=show.php"); 

?>