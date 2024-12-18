<?php

namespace app\index\controller;

use think\captcha\Captcha;
use think\Controller;

class Verify extends Controller
{

    public function index($id = '')
    {
        ob_end_clean();
        $captcha = new Captcha((array) config('captcha'));
        return $captcha->entry($id);
    }

    public function check($verify, $id = '')
    {
        if (!captcha_check($verify)) {
            return 0;
        } else {
            return 1;
        }
    }

}
