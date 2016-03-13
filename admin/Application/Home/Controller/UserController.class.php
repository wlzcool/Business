<?php
/**
 * Created by PhpStorm.
 * User: wanglingzhi
 * Date: 2016/3/4
 * Time: 10:39
 */
namespace Home\Controller;

use Think\Controller;

class UserController extends BaseController
{
    public function insert()
    {
        if (IS_GET) {
            $this->display();
        }else{
            $email = I("post.email");
            $username = I("post.username");
            $password = I("post.password");
            $Model = M('User');
            $where['email'] = ':email';
            $where['username']=':username';
            $where['password'] = ':password';

            $bind[':email'] = array($email, \PDO::PARAM_STR);
            $bind[':password'] = array($password, \PDO::PARAM_STR);
            $list = $Model->where($where)->bind($bind)->select();
            if ($list) {
                $this->ajaxReturn(array("State" => "Success"), "JSON");
            } else {
                $this->ajaxReturn(array("State" => "Error", "Message" => "用户名或密码错误"), "JSON");
            }
        }
    }

}