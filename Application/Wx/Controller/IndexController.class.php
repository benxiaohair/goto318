<?php
namespace wx\Controller;

use Think\Controller;

class IndexController extends Controller {

    protected $_postObj;

    public function index() {
//        define("TOKEN", "weixinapi");
//        $wechatObj = new \Ku\Wechat();
//        $wechatObj->responseMsg();
//        $wechatObj->valid();

        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        //extract post data
        if(!empty($postStr)) {
            /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
               the best way is to check the validity of xml by yourself */
            libxml_disable_entity_loader(true);
            $this->_postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $msgType        = trim($this->_postObj->MsgType);

            switch($msgType) {
                case 'event':
                    $this->event();
                    break;
                case 'text' :
                    $this->text();
                    break;
                case 'image' :
                    break;
                case 'voice' :
                    break;
                case 'video' :
                    break;
                case 'shortvideo':
                    break;
                case 'location' :
                    break;
                case 'link':
                    break;
                default :
                    break;
            }
        }

    }

    public function event() {
        $event = $this->_postObj->Event;

        if($event == 'subscribe') {
            $content = '感谢你长得这么帅（美）还来关注我/::*' . "\n" . '在这里你会变得更帅（美）/::)';
            echo text($this->_postObj, $content);
        }


    }

    /**
     * @desc 文本自动回复
     * @return string
     */
    public function text() {
        $keyword = trim($this->_postObj->Content);



        switch($keyword) {
            case '' :
                echo text($this->_postObj, '你什么意思？');
                break;
            case '你好！' :
                echo text($this->_postObj, '你好呀！');
                break;
            case 'hello' :
                echo text($this->_postObj, 'Hi!！');
                break;
            case 'Hi' :
                echo text($this->_postObj, 'Oh!');
                break;
            case '换行' :
                echo text($this->_postObj, '这是第一行!' . "\n" . '我是第二行！');
                break;
            case '多图文':
                $array   = [
                    ['Title' => '多图文一', 'Description' => '第一个文本内容', 'PicUrl' => 'http://7xqoks.com1.z0.glb.clouddn.com/1455679468779.jpg', 'Url' => 'http://www.goto318.com'],
                    ['Title' => '多图文二', 'Description' => '第二个文本内容', 'PicUrl' => 'http://7xqoks.com1.z0.glb.clouddn.com/10.jpg', 'Url' => 'http://www.goto318.com']
                ];
                echo images($this->_postObj, $array);
            default :
                echo text($this->_postObj, '/::)');
                break;
        }


    }

    public function getToken() {
        $appId     = C(AppId);
        $appSecret = C(AppSecret);
        $url       = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=' . $appId . '&secret=' . $appSecret;
        echo $url;
    }

    public function getIp() {
        $accessToken = '';
        $url         = 'https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=' . $accessToken;
        echo $url;
    }
}
