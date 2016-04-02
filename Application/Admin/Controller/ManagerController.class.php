<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends CommonController {
    public function index(){
        $admin = M('admin');
        $result = $admin->order('user_id asc')->select();
        foreach($result as $key=>$value){
            $result[$key]['add_time'] = date("Y-m-d H:i:s",$value['add_time']);
            $result[$key]['last_login'] = date("Y-m-d H:i:s",$value['last_login']);
        }
        $this->list = $result;
        $this->display();
    }

    public function log(){
        $admin_log = M('admin_log');
        $count  = $admin_log->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $admin = $admin_log->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $user = M('admin');
        foreach($admin as $key=>$value){
            $admin[$key]['create_time'] = date("Y-m-d H:i:s",$value['create_time']);
            $admin[$key]['ip'] = long2ip($value['ip']);
            $id = $value['user_id'];
            $admin[$key]['user_name'] = $user->where("user_id = $id")->getField('user_name');
        }
        $this->page = $show;// 赋值分页输出
        $this->admin = $admin;
        $this->display();
    }

    public function cheak_name(){
        $name =trim($_GET['name']);
        $admin = M('admin');
        $data['user_name'] = $name;
        $result = $admin->where($data)->count();
        $this->ajaxReturn($result);

    }

    public  function add(){
        if($_GET['action'] == "add"){
            //用户名的判断
            $name =trim($_POST['user_name']);
            if(strlen($name)<4){
                $this->error('用户名长度不能小于四位！');
            }
            $admin = M('admin');
            $data['user_name'] = $name;
            $result = $admin->where($data)->count();
            if($result>0){
                $this->error('该用户名已经被注册了！');
            }
            //密码判断
            if(strlen($_POST['password'])<6){
                $this->error('密码长度不得小于六位！');
            }
            if($_POST['password'] != $_POST['password_confirm']){
                $this->error('密码不一致，请重新输入！');
            }
            //插入数据
            $admin = M('admin');
            $data['user_name'] = $name;
            $data['password'] = md5($_POST['password']);
            $data['email'] = trim($_POST['email']);
            $data['add_time'] = strtotime(date("Y-m-d H:i:s"));

            $result = $admin->data($data)->add();
            if($result){
                //记录
                $admin_log = M('admin_log');
                $d['user_id'] = $_SESSION['user_id'];
                $d['create_time'] = strtotime(date("Y-m-d H:i:s"));
                $d['action'] = "添加用户$name";
                $d['ip'] = $_SESSION['ip'];
                $admin_log->add($d);

                $this->success("添加成功！","index");
            }else{
                $this->error("添加失败，请重试！");
            }
        }else{
            $this->display();
        }

    }

    public function edit(){
        if($_GET['rec'] == 'update'){
            $admin = M('admin');
            $id = $_POST['id'];

            if(strlen($_POST['user_name'])<4 ){
                $this->error("用户名不能小于四位！");
            }

            $result = $admin->where("user_id = $id")->getField('password');
            if(md5($_POST['old_password']) != $result){
                $this->error("密码错误，请重新输入！");
            }

            if(strlen($_POST['password'])<6 ){
                $this->error("密码长度不得小于六位！");
            }

            if($_POST['password'] != $_POST['password_confirm']){
                $this->error("密码不一致！");
            }

            $data['user_name'] = trim($_POST['user_name']);
            $data['password'] = md5($_POST['password']);
            $data['email'] = $_POST['email'];
            $result = $admin->where("user_id = $id")->save($data);
            if($result){
                //记录
                $admin_log = M('admin_log');
                $d['user_id'] = $_SESSION['user_id'];
                $d['create_time'] = strtotime(date("Y-m-d H:i:s"));
                $d['action'] = "修改用户".$data['user_name'];
                $d['ip'] = $_SESSION['ip'];
                $admin_log->add($d);
            }
            $this->success("更新成功！","index");
        }else{
            $admin = M('admin');
            $where['user_id'] = $_GET['id'];
            $this->user = $admin->where($where)->find();
            $this->display();
        }

    }

    public function delete(){
        $id = $_GET['id'];
        $admin = M('admin');
        $name = $admin->where("user_id = $id")->getField('user_name!');
        $result = $admin->where("user_id = $id")->delete();
        if($result){
            //记录
            $admin_log = M('admin_log');
            $d['user_id'] = $_SESSION['user_id'];
            $d['create_time'] = strtotime(date("Y-m-d H:i:s"));
            $d['action'] = "删除用户$name";
            $d['ip'] = $_SESSION['ip'];
            $admin_log->add($d);
            $this->success("删除成功！");
        }else{
            $this->error("删除失败，请重试！");
        }
    }
}