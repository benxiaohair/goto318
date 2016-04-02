<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>后台——管理中心</title>
    <link rel="stylesheet" type="text/css" href="/Public/CSS/admin/index.css" />
    <script type="text/javascript" src="/Public/JS/jquery.js"></script>
    <script type="text/javascript" src="/Public/JS/Admin/global.js"></script>
    <script type="text/javascript" src="/Public/JS/Admin/function.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript">
        //用户名的验证
        $(function(){
            $('input[name="user_name"]').keyup(function(){
                var name = $(this).val();
                if(name.length<4){
                    $('#name').remove();
                    $('input[name="user_name"]').after('<span id="name" style="color: gray">（用户名长度必须大于四位！）</span>')
                }else{
                    $.getJSON('/Admin.php/Manager/cheak_name',{name:name},function(data){
                        if(data == 0){
                            $('#name').remove();
                            $('input[name="user_name"]').after('<span id="name" style="color: green">（该用户名可以使用！）</span>')
                        }else{
                            $('#name').remove();
                            $('input[name="user_name"]').after('<span id="name" style="color:red">（该用户名已经被注册！）</span>')
                        }
                });
               }
            })
       })
        //邮箱的验证
        $(function(){
            $('input[name="email"]').change(function(){
                var objName = $(this).val();
                var pattern = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]{2,})/;
                if (!pattern.test(objName)){
                    $('#email').remove();
                    $('input[name="email"]').after('<span id="email" style="color: red">（邮箱格式不正确！）</span>')
                }else{
                    $('#email').remove();
                    $('input[name="email"]').after('<span id="email" style="color: green">（可以使用！）</span>')
                }
            })
        })
        //密码的验证
        $(function(){
            $('input[name="password"]').blur(function(){
                var name = $(this).val();
                if(name.length<6){
                    $('#password').remove();
                    $('input[name="password"]').after('<span id="password" style="color: red">（密码长度必须大于六位！）</span>')
                }else{
                    $('#password').remove();
                    $('input[name="password"]').after('<span id="password" style="color: green">（可以使用！）</span>')
                }
            })
        })
    </script>
</head>
<body>
<div id="dcWrap">

    <div id="dcHead">
    <div id="head">
        <div class="logo">
            <a href="http://demo.douco.com/admin/index.php">
                <img src="/Public/Images/Admin/dclogo.gif" alt="logo">
            </a>
        </div>
        <div class="nav">
            <ul>
                <li><a href="http://www.goto318.com" target="_blank">查看站点</a></li>
                <li><a href="http://demo.douco.com/admin/index.php?rec=clear_cache">清除缓存</a></li>
            </ul>
            <ul class="navRight">
                <li class="M noLeft"><a href="javascript:void(0);">您好，admin</a>
                    <div class="drop mUser"> <a href="http://demo.douco.com/admin/manager.php?rec=edit&amp;id=1">编辑我的个人资料</a> </div>
                </li>
                <li class="noRight"><a href="/Admin.php/Login/cheakout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="dcLeft"><!-- 后台菜单 -->
    <div id="menu">
        <ul class="top">
            <li><a href="/Admin.php/Index"><i class="home"></i><em>管理首页</em></a></li>
            <li><a href="/Admin.php/Index/system"><i class="system"></i><em>系统设置</em></a></li>
        </ul>
        <ul>
            <li><a href="http://demo.douco.com/admin/product_category.php"><i class="manager"></i><em>会员管理</em></a></li>
            <li><a href="http://demo.douco.com/admin/product_category.php"><i class="article"></i><em>论坛管理</em></a></li>
        </ul>
        <ul>
            <li><a href="http://demo.douco.com/admin/product_category.php"><i class="productCat"></i><em>商品分类</em></a></li>
            <li><a href="http://demo.douco.com/admin/product.php"><i class="product"></i><em>商品列表</em></a></li>
        </ul>
        <ul>
            <li><a href="http://demo.douco.com/admin/article_category.php"><i class="articleCat"></i><em>文章分类</em></a></li>
            <li><a href="http://demo.douco.com/admin/article.php"><i class="article"></i><em>文章列表</em></a></li>
        </ul>
        <ul>
            <li><a href="/Admin.php/Manager"><i class="manager"></i><em>网站管理员</em></a></li>
            <li><a href="/Admin.php/Manager/log_log"><i class="managerLog"></i><em>操作记录</em></a></li>
            <li><a href="http://demo.douco.com/admin/backup.php"><i class="backup"></i><em>数据备份</em></a></li>
        </ul>
        <ul class="bot">
            <li><a href="http://demo.douco.com/admin/mobile.php"><i class="mobile"></i><em>手机版设置</em></a></li>
            <li><a href="http://demo.douco.com/admin/link.php"><i class="link"></i><em>友情链接</em></a></li>
        </ul>
    </div>
</div>
<!-- dcHead 结束 -->

    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>网站管理员</strong> </div>

        <div id="mainBox">
            <h3><a href="/Admin.php/Manager/index" class="actionBtn">返回列表</a>网站管理员</h3>
            <form action="/Admin.php/Manager/add" method="post">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="100" align="right">管理员名称</td>
                        <td>
                            <input type="text" name="user_name" size="40" value="" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td width="100" align="right">邮箱</td>
                        <td>
                            <input type="text" name="email" size="40" value="" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">密码</td>
                        <td>
                            <input type="password" name="password" size="40" class="inpMain" /><span id="password">（密码长度至少六位）</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">确认密码</td>
                        <td>
                            <input type="password" name="password_confirm" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" class="btn" value="提交" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 © 2013-2014 漳州豆壳网络科技有限公司，并保留所有权利。
            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
</body>
</html>