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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>系统设置</strong> </div>
        <div id="mainBox">
            <div class="idTabs">
                <div class="items">
                    <form action="/Admin.php/Index/update" method="post" enctype="multipart/form-data">
                        <div id="main">
                            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                                <tr>
                                    <th width="131">名称</th>
                                    <th>内容</th>
                                </tr>
                                <tr>
                                    <td align="right">站点名称</td>
                                    <td>
                                        <input type="text" name="web_name" value="<?php echo ($web['web_name']); ?>" size="80" class="inpMain" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">站点标题</td>
                                    <td>
                                        <input type="text" name="web_title" value="<?php echo ($web['web_title']); ?>" size="80" class="inpMain" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">站点关键字</td>
                                    <td>
                                        <input type="text" name="web_keywords" value="<?php echo ($web['web_keywords']); ?>" size="80" class="inpMain" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">站点描述</td>
                                    <td>
                                        <input type="text" name="web_description" value="<?php echo ($web['web_description']); ?>" size="80" class="inpMain" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">公司地址</td>
                                    <td>
                                        <input type="text" name="web_address" value="<?php echo ($web['web_address']); ?>" size="80" class="inpMain" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">是否关闭网站</td>
                                    <td>
                                        <label for="site_closed_0">
                                            <input type="radio" name="web_show" id="site_closed_0" value="0" checked="true">
                                            否</label>
                                        <label for="site_closed_1">
                                            <input type="radio" name="web_show" id="site_closed_1" value="1">
                                            是</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">ICP备案证书号</td>
                                    <td>
                                        <input type="text" name="web_icp" value="<?php echo ($web['web_icp']); ?>" size="80" class="inpMain" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">客服电话</td>
                                    <td>
                                        <input type="text" name="web_tel" value="<?php echo ($web['web_tel']); ?>" size="80" class="inpMain" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">传真</td>
                                    <td>
                                        <input type="text" name="web_fax" value="<?php echo ($web['web_fax']); ?>" size="80" class="inpMain" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">客服QQ号码</td>
                                    <td>
                                        <input type="text" name="web_qq" value="<?php echo ($web['web_qq']); ?>" size="80" class="inpMain" />
                                        <p class="cue">多个客服的QQ号码请以半角逗号（,）分隔，如果需要设定昵称则在号码后跟 /昵称。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">邮件地址</td>
                                    <td>
                                        <input type="text" name="web_email" value="<?php echo ($web['web_email']); ?>" size="80" class="inpMain" />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">URL 重写</td>
                                    <td>
                                        <label for="rewrite_0">
                                            <input type="radio" name="rewrite" id="rewrite_0" value="0">
                                            否</label>
                                        <label for="rewrite_1">
                                            <input type="radio" name="rewrite" id="rewrite_1" value="1" checked="true">
                                            是</label>
                                        <span class="cue ml">URL重写需要Rewrite支持，在启用前你需要重新命名根目录和"m"目录下 ".htaccess.txt" 文件为 ".htaccess"，如果不存在请手动下载伪静态规则 <a href="http://down.douco.com/rewrite.rar" target="_blank">点击下载</a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">留言板强制中文输入</td>
                                    <td>
                                        <label for="guestbook_check_chinese_0">
                                            <input type="radio" name="guestbook_check_chinese" id="guestbook_check_chinese_0" value="0">
                                            否</label>
                                        <label for="guestbook_check_chinese_1">
                                            <input type="radio" name="guestbook_check_chinese" id="guestbook_check_chinese_1" value="1" checked="true">
                                            是</label>
                                        <span class="cue ml">强制用户留言时必须输入中文，可以有效抵御英文广告信息</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">统计/客服代码调用</td>
                                    <td>
                                        <textarea name="code" cols="70" rows="5" value="<?php echo ($web['web_statistical']); ?>" class="textArea" /></textarea>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                            <tr>
                                <td width="131"></td>
                                <td>
                                    <input name="submit" class="btn" type="submit" value="提交" />
                                    <input name="refresh" class="btn" type="button" value="重置" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
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