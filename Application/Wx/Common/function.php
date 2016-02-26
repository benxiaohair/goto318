<?php

/**
 * @desc 文本信息
 */
function text($postObj, $content) {
    $tpl = '<xml>
            <ToUserName><![CDATA[%s]]></ToUserName>
            <FromUserName><![CDATA[%s]]></FromUserName>
            <CreateTime>%s</CreateTime>
            <MsgType><![CDATA[%s]]></MsgType>
            <Content><![CDATA[%s]]></Content>
            <FuncFlag>0</FuncFlag>
            </xml>';

    return sprintf($tpl, $postObj->FromUserName, $postObj->ToUserName, time(), 'text', $content);

}

function images($object, $articleArray) {
    if(!is_array($articleArray)) {
        return;
    }

    $itemTpl = '<item>
                    <Title><![CDATA[%s]]></Title>
                    <Description><![CDATA[%s]]></Description>
                    <PicUrl><![CDATA[%s]]></PicUrl>
                    <Url><![CDATA[%s]]></Url>
                </item>';

    $item_str = "";

    foreach($articleArray as $item) {
        $item_str .= sprintf($itemTpl, $item['Title'], $item['Description'], $item['PicUrl'], $item['Url']);
    }

    $xmlTpl = '<xml>
                <ToUserName><![CDATA[%s]]></ToUserName>
                <FromUserName><![CDATA[%s]]></FromUserName>
                <CreateTime>%s</CreateTime>
                <MsgType><![CDATA[news]]></MsgType>
                <ArticleCount>%s</ArticleCount>
                <Articles>' . $item_str . '</Articles>
                </xml>';

    return sprintf($xmlTpl, $object->FromUserName, $object->ToUserName, time(), count($articleArray), $articleArray);

}
