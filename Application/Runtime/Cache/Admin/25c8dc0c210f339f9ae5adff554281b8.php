<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>后台——管理中心</title>
    <link rel="stylesheet" type="text/css" href="/Public/CSS/admin/index.css" />
    <script type="text/javascript" src="/Public/JS/jquery.js"></script>
    <script type="text/javascript" src="/Public/JS/Admin/global.js"></script>
    <script type="text/javascript" src="/Public/JS/Admin/function.js"></script>
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
                <li class="M"><a href="javascript:void(0);" class="topAdd">新建</a>
                    <div class="drop mTopad"><a href="http://demo.douco.com/admin/product.php?rec=add">商品</a> <a href="http://demo.douco.com/admin/article.php?rec=add">文章</a> <a href="http://demo.douco.com/admin/nav.php?rec=add">自定义导航</a> <a href="http://demo.douco.com/admin/show.php">首页幻灯</a> <a href="http://demo.douco.com/admin/page.php?rec=add">单页面</a> <a href="http://demo.douco.com/admin/manager.php?rec=add">管理员</a> <a href="http://demo.douco.com/admin/link.php">友情链接</a> </div>
                </li>
                <li><a href="http://demo.douco.com/index.php" target="_blank">查看站点</a></li>
                <li><a href="http://demo.douco.com/admin/index.php?rec=clear_cache">清除缓存</a></li>
                <li class="noRight"><a href="http://demo.douco.com/admin/index.php?rec=about">关于 DouPHP</a></li>
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
        </ul>
        <ul>
            <li><a href="/Admin.php/Index/system"><i class="system"></i><em>系统设置</em></a></li>
            <li><a href="http://demo.douco.com/admin/nav.php"><i class="nav"></i><em>自定义导航栏</em></a></li>
            <li><a href="http://demo.douco.com/admin/show.php"><i class="show"></i><em>首页幻灯广告</em></a></li>
            <li><a href="http://demo.douco.com/admin/page.php"><i class="page"></i><em>单页面管理</em></a></li>
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
        </ul>
        <ul class="bot">
            <li><a href="http://demo.douco.com/admin/mobile.php"><i class="mobile"></i><em>手机版设置</em></a></li>
            <li><a href="http://demo.douco.com/admin/guestbook.php"><i class="guestbook"></i><em>留言反馈</em></a></li>
            <li><a href="http://demo.douco.com/admin/backup.php"><i class="backup"></i><em>数据备份</em></a></li>
            <li><a href="http://demo.douco.com/admin/link.php"><i class="link"></i><em>友情链接</em></a></li>
        </ul>
    </div>
</div>
<!-- dcHead 结束 -->

    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>操作记录</strong> </div>   <div id="mainBox">
        <h3>操作记录</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <th width="30" align="center">编号</th>
                <th width="100" align="left">操作日期</th>
                <th width="100" align="center">操作者</th>
                <th align="left">操作记录</th>
                <th width="100" align="center">IP地址</th>
            </tr>
            <tr>
                <td align="center">155</td>
                <td>2015-08-13</td>
                <td align="center">admin</td>
                <td align="left">管理员登录: 登录成功！</td>
                <td align="center">120.36.146.33</td>
            </tr>
            <tr>
                <td align="center">154</td>
                <td>2015-08-13</td>
                <td align="center">admin</td>
                <td align="left">管理员登录: 登录成功！</td>
                <td align="center">125.68.70.53</td>
            </tr>
            <tr>
                <td align="center">153</td>
                <td>2015-08-13</td>
                <td align="center">admin</td>
                <td align="left">系统设置: 编辑成功</td>
                <td align="center">14.121.169.23</td>
            </tr>
            <tr>
                <td align="center">152</td>
                <td>2015-08-13</td>
                <td align="center">admin</td>
                <td align="left">管理员登录: 登录成功！</td>
                <td align="center">14.121.169.23</td>
            </tr>
            <tr>
                <td align="center">151</td>
                <td>2015-08-13</td>
                <td align="center">admin</td>
                <td align="left">管理员登录: 登录成功！</td>
                <td align="center">61.141.159.86</td>
            </tr>
            <tr>
                <td align="center">150</td>
                <td>2015-08-13</td>
                <td align="center">admin</td>
                <td align="left">系统设置: 编辑成功</td>
                <td align="center">116.231.160.168</td>
            </tr>
            <tr>
                <td align="center">149</td>
                <td>2015-08-13</td>
                <td align="center">admin</td>
                <td align="left">系统设置: 编辑成功</td>
                <td align="center">116.231.160.168</td>
            </tr>
            <tr>
                <td align="center">148</td>
                <td>2015-08-13</td>
                <td align="center">admin</td>
                <td align="left">管理员登录: 登录成功！</td>
                <td align="center">116.231.160.168</td>
            </tr>
            <tr>
                <td align="center">147</td>
                <td>2015-08-13</td>
                <td align="center">admin</td>
                <td align="left">管理员登录: 登录成功！</td>
                <td align="center">220.203.32.188</td>
            </tr>
            <tr>
                <td align="center">146</td>
                <td>2015-08-13</td>
                <td align="center">admin</td>
                <td align="left">管理员登录: 登录成功！</td>
                <td align="center">140.255.245.38</td>
            </tr>

        </table>
        <div class="pager">总计 155 个记录，共 11 页，当前第 1 页 | <a href="manager.php?rec=manager_log">第一页</a> 上一页 <a href="manager.php?rec=manager_log&page=2">下一页</a> <a href="manager.php?rec=manager_log&page=11">最末页</a></div>       </div>
    </div>

    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 © 2013-2014 漳州豆壳网络科技有限公司，并保留所有权利。
            </ul>
        </div>
    </div>
    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>

</body>
</html>