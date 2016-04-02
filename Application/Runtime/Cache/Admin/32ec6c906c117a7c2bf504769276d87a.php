<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录-后台管理系统</title>
    <link rel="stylesheet" type="text/css" href="/Public/CSS/admin/index.css" />
    <script type="text/javascript" src="/Public/JS/Admin/function.js"></script>
</head>
<body>
<form action="/Admin.php/Login/cheakin" method="post">
    <div id="login">
        <div class="dologo"></div>
        <ul>
            <li class="inpLi"><b>用户名：</b><input name="user_name" class="inpLogin"  type="text"></li>
            <li class="inpLi"><b>密码：</b><input name="password" class="inpLogin"  type="password"></li>
            <li class="vcodePic">
                <div class="inpLi"><b>验证码：</b><input name="vcode" class="vcode" type="text"></div>
                <img id="code" src="/Admin.php/Public/Verify" alt="是否后台登录验证码" onclick="refreshcode(this)" title="看不清？点击更换另一个验证码。" border="1">
            </li>
            <li class="last"><input type="checkbox" name="cokie" />记住密码 <input name="submit" class="btn" value="登录" type="submit"></li>
        </ul>
    </div>
</form>
</body>
</html>