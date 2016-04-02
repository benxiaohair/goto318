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
        $upload = new \Think\Upload();// ʵ�����ϴ���
        $upload->maxSize   =    3145728 ;// ���ø����ϴ���С
        $upload->exts      =    array('jpg', 'gif', 'png', 'jpeg');// ���ø����ϴ�����
        $upload->savePath  =    './Public/Uploads/'; // ���ø����ϴ�Ŀ¼
         // �ϴ��ļ�
        $info   =   $upload->upload();
        if(!$info) {
            $this->error($upload->getError());  // �ϴ�������ʾ������Ϣ
        }else{
            $this->success('�ϴ��ɹ���');  // �ϴ��ɹ�
        }
    }

}