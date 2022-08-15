<html>
	<head>
		<title>yuPengCN-留言板</title>
		<meta charset='utf-8' />
    <style type="text/css">
    body {
	background-image: url(../wallpaper/img31.jpg);
	background-repeat: repeat;
    background-attachment: fixed;
    background-size:cover;
     cursor: url(../js/p1.ico),auto;
}
    </style>
	</head>
	<body>
		<center>
			<h1>yuPengCN-留言板</h1>
			<p>用户发表内容不代表本站！严禁发布违规违法内容！否则后果自负！与本站无关！请手动刷新页面(一般15秒)</p>
			<a href='chat1.php'>添加留言</a>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='show.php'>查看留言</a>
			<hr/>
			
			<table  width='800' border='1' cellpadding='5' >
				<tr>
					<th width="129">标题</th>
					<th width="129">作者</th>
					<th width="129">内容</th>
					<th width="144">时间</th>
				</tr>
				<?php
					//读文件
					$info=rtrim(file_get_contents("ly.db"),"@");
					if($info != ""){
						//拆分
						$list=explode("@@",$info);
						
						//var_dump($list);
						//遍历
						foreach($list as $k=>$v){
						
							//拆分v
							$oncely=explode("##",$v);

							echo "<tr>";
								echo "<td>{$oncely[0]}</td>";
								echo "<td>{$oncely[1]}</td>";
								echo "<td>{$oncely[2]}</td>";
								echo "<td>{$oncely[4]}</td>";
							echo "</tr>";
						}
					
					}else{
						echo "无数据";
					}
					
				
				
				?>
			</table>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			Copyright © 2021-2022 版权所有
		<img src="../picture/safe.ico" width="15" height="15" alt=""/>
		</center>
	</body>
</html>