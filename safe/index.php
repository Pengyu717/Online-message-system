<?php
    // 不提示错误信息
    error_reporting(0);

    $zh = $_POST['username'];
    $mm = $_POST['password'];

    // 把内容转化成字符串
    $wjsj = file_get_contents('user/users.txt');
    // 解析内容
    $wjsj_array = explode("\r\n", $wjsj);

    if ($zh != null) {
        for ($i = 0; $i < count($wjsj_array); $i ++) {
            if ($zh == $wjsj_array[$i]) {
                if ($mm == $wjsj_array[$i+1]) {
                    // 登录成功获取数据
                    $zhm = $wjsj_array[$i];
                    $mmsjm = $wjsj_array[$i+1];
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peng软件下载工作站-留言板管理</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            height: 100%;
        }

        body {
	font-size: 18px;
	background-image: url(../wallpaper/img31.jpg);
        }

        div#Main {
            width: 70%;
            margin: 6% auto;
        }

        .inputStyle {
            border: none;
            border: 1px solid #dddddd;
            padding: 6px 10px;
            border-radius: 2px;
            font-size: 20px;
            margin-top: 2px;
        }

        #Button {
            margin-top: 2%;
            border: none;
            background-color: #ffffff;
            padding: 6px 20px;
            background-color: #1a53db;
            color: #ffffff;
        }
    body,td,th {
	font-family: "Helvetica Neue",;
}
    </style>
</head>
<body>
<h3><a href="../index.html"><img src="../favicon.ico" alt="" width="18" height="18"/></a>peng软件下载工作站-留言板管理  </h3>
<h4> 你好,管理员.请登录 </h4>
<div id="Main">
    <form action="./index.php" method="post">
            <p>
              <input type="text" placeholder="请输入管理账号" class="inputStyle" name="username">
            </p>
            <p>
              <input type="password" placeholder="请输入管理密码" class="inputStyle" name="password">
              <br>
            </p>
            <button id="Button">登录<img src="../ico web/INDOMAIN.ICO" alt="" width="17" height="17"/></button>
        </form>
        <span>
            <?php
                if ($zhm != null) {
                    echo "登录成功";
                    echo "<br>";
                    echo "<br>";
                    echo "用户名:".$zhm;
                    echo "<br>";
                    echo "密码:".$mmsjm;
					echo "<br>";
					echo "进入留言板管理页面 https://您的网址your website/chat/showAdmin.php";
                }
            ?>
        </span>
    </div>
</body>
</html>