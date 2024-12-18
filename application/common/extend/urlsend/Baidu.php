<?php

namespace app\common\extend\urlsend;

class Baidu
{

    public $name = '百度推送普通';
    public $ver = '1.0';

    public function submit($data)
    {
        $token = $GLOBALS['config']['urlsend']['baidu']['token'];
        $site = $GLOBALS['http_type'].$GLOBALS['config']['site']['site_url'];

        $api = 'http://data.zz.baidu.com/urls?site='.$site.'&token='.$token;
        $head = ['Content-Type: text/plain'];
        $post = implode("\n", $data['urls']);

        $r = mac_curl_post($api, $post, $head);
        $json = json_decode($r, true);
        if (!$json) {
            return ['code' => 101, 'msg' => lang_web('request_failed')];
        } elseif ($json['error']) {
            return ['code' => 102, 'msg' => lang_web('error_occurred').$json['message']];
        }
        return [
            'code' => 1,
            'msg'  => lang_web('push_successfully').$json['success'].lang_web('be_pushed').$json['remain'].lang_web('string_gbook_t').'。'
        ];
    }

}
