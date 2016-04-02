<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        //服务器的信息
        $mysql = mysql_get_server_info();

        $this->assign('PHP_V', PHP_VERSION);//php版本
        $this->assign('system', php_uname());//系统版本
        $this->assign('server_ip', GetHostByName($_SERVER['SERVER_NAME']));//服务器的ip

        $this->assign('web_port',  $_SERVER['SERVER_PORT']);//web端口
        $this->assign('client_web',  $_SERVER['USERDOMAIN']);//获取用户域名
        $this->assign('server_web',  $_SERVER["HTTP_HOST"] );//获取Http请求中Host值(返回值为域名或IP)
        $this->assign('mysql',   $mysql );//数据库的版本
        $this->assign('timezone',  date_default_timezone_get()  );//时区

        //获取管理员的登录记录
        $client = M('admin_log');
        $where['user_id'] = $_SESSION['user_id'];
        $where['action'] = "登录成功！";
        $client_ip = $client->where($where)->order('id desc')->limit(5)->select();

        foreach($client_ip as $k=>$v){
            $client_ip[$k]['ip'] = long2ip($v['ip']);
            $client_ip[$k]['create_time'] = date("Y-m-d H:i:s" ,$v['create_time']);
        }
        //var_dump($client_ip);
        $this->assign('client_ip',  $client_ip); //赋值ip

        $this->display();
    }

    public function system(){
        $config = M('web_config');
        $result = $config->field('name,content')->order('id asc')->limit(15)->select();
        foreach($result as $k=>$v){
            $web[$v['name']] = $v['content'];
        }
        $this->assign('web',$web);
        $this->display();
    }

    public function update(){
        foreach($_POST as $k=>$v){
            $newdate[$k] = trim($_POST[$k]);
        }

        foreach($newdate as $k=>$v){
            $sql = M('web_config');
            $where['name'] = $k;
            $data['content'] = $newdate[$k];
            $sql->where($where)->data($data)->save();
        }

        $this->success('更新成功！');
    }
}