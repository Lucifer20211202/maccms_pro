<?php

namespace app\index\controller;

class MyError
{
    public function _empty()
    {
        header("HTTP/1.0 404 Not Found");
        echo '<script>setTimeout(function (){location.href="'.MAC_PATH.'";},'.(2000).');</script>';
        $msg = lang_frontend('page_not_found');
        abort(404, $msg);
        exit;
    }
}