<style type="text/css">
body {
	background-image: url(../wallpaper/img31.jpg);
}
</style>
<?php
	if(empty($_POST)){
		//如果不是post提交自动跳回
		header("location:chat1.php");
		die;
	}
	//标题不能为空
	if($_POST['title']==""){
		echo "标题不能为空！";
		header("refresh:1;url=chat1.php");
		die;
	}
	//作者不能为空
	if($_POST['author']==""){
		echo "作者不能为空！";
		header("refresh:1;url=chat1.php");
		die;
	}
	//内容不能为空
	if($_POST['content']==""){
		echo "内容不能为空！";
		header("refresh:1;url=chat1.php");
		die;
	}
	
	//拼接字符串
	$info=$_POST['title']."##".$_POST['author']."##".$_POST['content'].
	"##".$_SERVER['REMOTE_ADDR']."##".date("Y-m-d H:i")."@@";
	
	//写入db文件
	file_put_contents("ly.db",$info,FILE_APPEND);
	
	echo "执行发送信息操作成功！ Copyright © 2021-2022 版权所有 ";
	header("refresh:1;url=chat1.php");
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>