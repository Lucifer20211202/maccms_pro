<?php

namespace app\index\controller;

class Map extends Base
{

    public function index()
    {
        return $this->label_fetch('map/index');
    }

}
