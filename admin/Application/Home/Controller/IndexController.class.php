<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($name='thinkphp'){
        $this->display();
    }
}