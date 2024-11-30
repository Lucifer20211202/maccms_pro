<?php
namespace app\index\controller;
use think\Controller;

class Search extends Base
{

    public function index()
    {
        return $this->label_fetch('search/index');
    }

}
