<?php
namespace Home\Controller;

use Home\Controller;

class IndexController extends BaseController
{
    public function index($name = 'thinkphp')
    {
        $this->display();
    }


}