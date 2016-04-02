<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){

        $this->display();
    }

    public function cheakin(){
        $code = trim($_POST['vcode']);
        //验证
        $verify = new \Think\Verify();
        $a = $verify->check($code,'');
        if(!$a){
            //提示错误并返回
            $this->error('验证码错误');
        }
        //接收数据
        $client_ip = $_SERVER['REMOTE_ADDR'];//获取当前客户端的ip
        $_SESSION['ip'] = sprintf("%u",ip2long($client_ip));
        $_SESSION['user_name'] = trim($_POST['user_name']);
        $_SESSION['password'] = trim($_POST['password']);
        //验证用户
        $admin = M('admin');
        $data['user_name'] = $_SESSION['user_name'];
        $result = $admin->where($data)->find();
        if($_SESSION['user_name']!= $result['user_name']){
            $this->error('该用户不存在！');
        }
        if(md5($_SESSION['password']) != $result['password']){
            $this->error('密码错误！');
        }
        $_SESSION['user_id'] = $result['user_id'];
        //登录时间和ip地址
        $log['last_ip'] = $_SESSION['ip'];
        $log['last_login'] = strtotime(date("Y-m-d H:i:s"));
        $where['user_id'] = $_SESSION['user_id'];
        $q = $admin->where($where)->save($log);
        //记录
        $admin_log = M('admin_log');
        $d['user_id'] = $_SESSION['user_id'];
        $d['create_time'] = strtotime(date("Y-m-d H:i:s"));
        $d['action'] = "登录成功！";
        $d['ip'] = $_SESSION['ip'];
        $admin_log->add($d);
        $this->success('登陆成功！', '/Admin.php/Index');

    }

    public function cheakout(){
        //$_SESSION = array();
        session(null); // 清空当前的session
        $this->success('注销成功','/Admin.php/Login/index');
    }



}