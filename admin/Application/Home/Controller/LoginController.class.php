<?php
/**
 * Created by PhpStorm.
 * User: wanglingzhi
 * Date: 2016/3/4
 * Time: 10:39
 */
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function Login()
    {
        if (IS_GET) {
            $this->display();
        }else{
            $email = I("post.email");
            $password = I("post.password");
            $Model = M('User');
            $where['email'] = ':email';
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



    public function Register()
    {
        if(IS_Get){
            $this->display();
        }else{
            $email = I("post.email");
            $password = I("post.password");
            $User = M('User');
            $data['email'] = ':email';
            $data['password'] = ':password';
            $bind[':email'] = array($email, \PDO::PARAM_STR);
            $bind[':password'] = array($password, \PDO::PARAM_STR);
            $result = $User->bind($bind)->add($data);
            if ($result) {
                $this->ajaxReturn(array("State" => "Success", "Message" => "注册成功"), "JSON");
            } else {
                $this->ajaxReturn(array("State" => "Error", "Message" => "注册失败"), "JSON");
            }
        }
    }
}