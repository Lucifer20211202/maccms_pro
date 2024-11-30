<?php
namespace app\index\controller;
use think\Controller;

class Map extends Base
{

    public function index()
    {
        return $this->label_fetch('map/index');
    }

}
