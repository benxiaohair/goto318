<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function index(){
        $Verify =     new \Think\Verify();// 验证码字体使用 ThinkPHP/Library/Think/Verify/ttfs/5.ttf
        $Verify->useZh = true;
        $Verify->entry();
    }
}