<?php

namespace app\index\controller;

class Search extends Base
{

    public function index()
    {
        return $this->label_fetch('search/index');
    }

}
