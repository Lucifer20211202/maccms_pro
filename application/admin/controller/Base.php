<?php

namespace app\admin\controller;

use app\common\controller\All;
use app\common\util\Dir;
use think\Cache;

class Base extends All
{
    var $_admin;
    var $_pagesize;
    var $_makesize;

    public function __construct()
    {
        parent::__construct();

        //判断用户登录状态
        if (in_array($this->_cl, ['Index']) && in_array($this->_ac, ['login', 'logout'])) {

        } elseif (ENTRANCE == 'api' && in_array($this->_cl, ['Timming']) && in_array($this->_ac, ['index'])) {

        } else {
            $res = model('Admin')->checkLogin();
            if ($res['code'] > 1) {
                return $this->redirect('index/login');
            }
            $this->_admin = $res['info'];
            $this->_pagesize = $GLOBALS['config']['app']['pagesize'];
            $this->_makesize = $GLOBALS['config']['app']['makesize'];

            if ($this->_cl != 'Update' && !$this->check_auth($this->_cl, $this->_ac)) {
                return $this->error(lang('permission_denied'));
            }
        }
        $this->assign('cl', $this->_cl);
        $this->assign('MAC_VERSION', config('version')['code']);
        $this->assign('MAC_LANG', config('maccms')['app']['lang']);
    }

    public function check_auth($c, $a)
    {
        $c = strtolower($c);
        $a = strtolower($a);

        $auths = $this->_admin['admin_auth'].',index/index,index/welcome,index/lang,';
        $cur = ','.$c.'/'.$a.',';
        //id为1或admin或proadmin为超级管理员,不进行权限验证
        if (($this->_admin['admin_id'] == '1') || ($this->_admin['admin_name'] == 'admin') || ($this->_admin['admin_name'] == 'proadmin')) {
            return true;
        } elseif (strpos($auths, $cur) === false) {
            return false;
        } else {
            return true;
        }
    }

    public function _cache_clear()
    {
        if (ENTRANCE == 'admin') {
            //播放器配置缓存
            $vodplayer = config('vodplayer');
            $voddowner = config('voddowner');
            $vodserver = config('vodserver');
            $player = [];
            foreach ($vodplayer as $k => $v) {
                $player[$k] = [
                    'show'  => (string) $v['show'],
                    'des'   => (string) $v['des'],
                    'ps'    => (string) $v['ps'],
                    'parse' => (string) $v['parse'],
                ];
            }
            $downer = [];
            foreach ($voddowner as $k => $v) {
                $downer[$k] = [
                    'show'  => (string) $v['show'],
                    'des'   => (string) $v['des'],
                    'ps'    => (string) $v['ps'],
                    'parse' => (string) $v['parse'],
                ];
            }

            $server = [];
            foreach ($vodserver as $k => $v) {
                $server[$k] = [
                    'show' => (string) $v['show'],
                    'des'  => (string) $v['des']
                ];
            }
            $content = 'MacPlayerConfig.player_list='.json_encode($player).',MacPlayerConfig.downer_list='.json_encode($downer).',MacPlayerConfig.server_list='.json_encode($server).';';
            $path = './static/js/playerconfig.js';
            if (!file_exists($path)) {
                $path .= '.bak';
            }
            $fc = @file_get_contents($path);
            if (!empty($fc)) {
                $jsb = mac_get_body($fc, '//缓存开始', '//缓存结束');
                $fc = str_replace($jsb, "\r\n".$content."\r\n", $fc);
                @fwrite(fopen('./static/js/playerconfig.js', 'wb'), $fc);
            }
        }

        Dir::delDir(RUNTIME_PATH.'cache/');
        Dir::delDir(RUNTIME_PATH.'log/');
        Dir::delDir(RUNTIME_PATH.'temp/');

        Cache::clear();

        return true;
    }

}