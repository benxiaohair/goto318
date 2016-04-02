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
                <li><a href="http://www.goto318.com" target="_blank">查看站点</a></li>
                <li><a href="http://demo.douco.com/admin/index.php?rec=clear_cache">清除缓存</a></li>
            </ul>
            <ul class="navRight">
                <li class="M noLeft"><a href="javascript:void(0);">您好，<?php echo ($_SESSION['user_name']); ?></a>
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
            <li><a href="/Admin.php/Manager/log"><i class="managerLog"></i><em>操作记录</em></a></li>
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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>操作记录</strong> </div>   <div id="mainBox">
        <h3>操作记录</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <th width="30" align="center">编号</th>
                <th width="150" align="left">操作日期</th>
                <th width="100" align="center">操作者</th>
                <th align="left">操作记录</th>
                <th width="100" align="center">IP地址</th>
            </tr>
            <?php if(is_array($admin)): $i = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td align="center"><?php echo ($vo['id']); ?></td>
                    <td><?php echo ($vo['create_time']); ?></td>
                    <td align="center"><?php echo ($vo['user_name']); ?></td>
                    <td align="left"><?php echo ($vo['action']); ?></td>
                    <td align="center"><?php echo ($vo['ip']); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <div class="pager"><?php echo ($page); ?>
        </div>
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
    </div>
    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>

</body>
</html>