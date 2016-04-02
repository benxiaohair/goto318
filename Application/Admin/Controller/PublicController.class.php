<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {

    public function Verify(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 17;
        $Verify->length   = 1;
        $Verify->imageW   = 118;
        $Verify->imageH   =30;
        $Verify->useNoise = true;
        $Verify->entry();
    }

    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =    3145728 ;// 设置附件上传大小
        $upload->exts      =    array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =    './Public/Uploads/'; // 设置附件上传目录
         // 上传文件
        $info   =   $upload->upload();
        if(!$info) {
            $this->error($upload->getError());  // 上传错误提示错误信息
        }else{
            $this->success('上传成功！');  // 上传成功
        }
    }

}