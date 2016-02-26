<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index() {
        $User  = M('Users'); // 实例化User对象
        $count = $User->where('status=1')->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count, 25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where('status=1')->order('add_time')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    public function like() {
        $User          = M('User'); // 实例化User对象
        $where['tel']  = ['LIKE', '%12%'];
        $where['name'] = ['LIKE', '%n%'];
        $return        = $User->where($where)->select();
        $this->assign('data', $return);

    }

    public function cacuse(){
        $str = '80+90';
        preg_match('/(\d+)([+-])(\d+)/i',$str,$res);
        print_r($res);
    }
}
