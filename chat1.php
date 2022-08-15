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
			<p>用户发表内容不代表本站！严禁发布违规违法内容！否则后果自负！与本站无关！</p>
			<a href='chat1.php'>添加留言</a>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='show.php'>查看留言</a>
			<hr/>
			<form action='doAdd.php' method='post'>
				<table  width='500' cellpadding='10' >
					<tr>
						<td align='right'>标题</td>
						<td><input type='text' name='title' size='30' /></td>
					</tr>
					<tr>
						<td align='right'>作者</td>
						<td><input type='text' name='author' /></td>
					</tr>
					<tr>
						<td align='right'>内容</td>
						<td><textarea name='content' cols='50' rows='6'></textarea></td>
					</tr>
					<tr align='center'>
						<td colspan='2'>
							<input type='submit' value='添加' />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type='reset' value='清空' />
						</td>
					</tr>
				</table>
			</form>
		Copyright © 2021-2022 版权所有
		<img src="../picture/safe.ico" width="15" height="15" alt=""/>
		</center>
	</body>
</html>