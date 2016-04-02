<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

    public function _initialize(){      // 公共的自动加载方法,判断用户是否登陆

        header("Content-type:text/html;charset=utf-8");

        if(empty($_SESSION['user_name']) || empty($_SESSION['password'])){

            $this->error('请先登陆！','/Admin.php/Login');

        }

    }

}