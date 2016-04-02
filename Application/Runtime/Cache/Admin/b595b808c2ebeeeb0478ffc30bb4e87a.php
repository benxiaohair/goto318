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
        <div id="urHere">DouPHP 管理中心</div>  <div id="mainBox" style="padding-top:18px;">

            <div class="indexBox">

            <table class="indexBoxTwo" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody><tr>
                    <td class="pr" valign="top" width="65%"><div class="indexBox">
                        <div class="boxTitle">网站基本信息</div>
                        <ul>
                            <table class="tableBasic" border="0" cellpadding="9" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <td width="120">单页面数：</td>
                                    <td><strong>6</strong></td>
                                    <td width="100">文章总数：</td>
                                    <td><strong>10</strong></td>
                                </tr>
                                <tr>
                                    <td>商品总数：</td>
                                    <td><strong>16</strong></td>
                                    <td>系统语言：</td>
                                    <td><strong>zh_cn</strong></td>
                                </tr>
                                <tr>
                                    <td>URL 重写：</td>
                                    <td><strong>开启</strong></td>
                                    <td>编码：</td>
                                    <td><strong>UTF-8</strong></td>
                                </tr>
                                <tr>
                                    <td>站点地图：</td>
                                    <td><strong>开启</strong></td>
                                    <td>网站域名：</td>
                                    <td><strong><?php echo ($server_web); ?></strong></td>
                                </tr>
                                <tr>
                                    <td>站点地图：</td>
                                    <td><strong>开启</strong></td>
                                    <td>网站域名：</td>
                                    <td><strong><?php echo ($server_web); ?></strong></td>
                                </tr>
                                </tbody></table>
                        </ul>
                    </div></td>
                    <td class="pl" valign="top"><div class="indexBox">
                        <div class="boxTitle">管理员  登录记录</div>
                        <ul>
                            <table class="tableBasic" border="0" cellpadding="6" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <th width="45%">IP地址</th>
                                        <th width="55%">操作日期</th>
                                    </tr>
                                    <?php if(is_array($client_ip)): $i = 0; $__LIST__ = $client_ip;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                                            <td align="center"><?php echo ($list['ip']); ?></td>
                                            <td align="center"><?php echo ($list['create_time']); ?></td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </ul>
                    </div></td>
                </tr>
                </tbody></table>
            <div class="indexBox">
                <div class="boxTitle">服务器信息</div>
                <ul>
                    <table class="tableBasic" border="0" cellpadding="8" cellspacing="0" width="100%">
                        <tbody><tr>
                            <td width="120">服务器操作系统:</td>
                            <td><?php echo ($system); ?></td>
                            <td width="100">Web 服务器的IP:</td>
                            <td><?php echo ($server_ip); ?></td>
                        </tr>
                        <tr>
                            <td>PHP 版本:</td>
                            <td><?php echo ($PHP_V); ?></td>
                            <td>MySQL 版本:</td>
                            <td><?php echo ($mysql); ?></td>
                        </tr>
                        <tr>
                            <td>安全模式:</td>
                            <td>否</td>
                            <td>安全模式GID:</td>
                            <td>否</td>
                        </tr>
                        <tr>
                            <td>Socket 支持:</td>
                            <td>是</td>
                            <td>时区设置:</td>
                            <td><?php echo ($timezone); ?></td>
                        </tr>
                        <tr>
                            <td>GD 版本:</td>
                            <td>是</td>
                            <td>Zlib 支持:</td>
                            <td>是</td>
                        </tr>
                        <tr>
                            <td>文件上传的最大大小:</td>
                            <td>20M</td>
                            <td>端口：</td>
                            <td><?php echo ($web_port); ?></td>
                        </tr>
                        </tbody></table>
                </ul>
            </div>


        </div>
    </div>

    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 © 2013-2014
            </ul>
        </div>
    </div>
    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>

</body>
</html>