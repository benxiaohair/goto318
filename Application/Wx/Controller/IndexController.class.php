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

        $articleArray = [
            0 => ['Title' => '标题一', 'Description' => '我是内容一', 'PicUrl' => '', 'Url' => 'http://www.goto318.com'],
            1 => ['Title' => '标题二', 'Description' => '我是内容二', 'PicUrl' => '', 'Url' => 'http://www.goto318.com'],

        ];

        switch($keyword) {
            case '' :
                $contentStr = '你什么意思？';
                break;
            case '你好！' :
                $contentStr = '你好呀！';
                break;
            case 'hello' :
                $contentStr = 'Hi!';
                break;
            case 'Hi' :
                $contentStr = 'Oh!';
                break;
            case '换行' :
                $contentStr = '这是第一行!' . "\n" . '我是第二行！';
                break;
            case '多图文' :
                echo images($this->_postObj, $articleArray);
                break;
            default :
                $contentStr = '/::)';
                break;
        }

        echo text($this->_postObj, $contentStr);

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
