<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/7/26 0026
 * Time: 17:22
 */
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
//301跳转
if($_SERVER['HTTP_HOST'] == 'goto318.com') {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: http://www.goto318.com');
}
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

define('BIND_MODULE','Moible');  //后台管理入口

// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单