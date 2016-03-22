<?php
namespace Home\Controller;
use Think\Controller;
class ColumnController extends BaseController {
    public function index(){
        $this->display();
    }
    public function  getColumnList(){
        $column =M('Column');
        $where['page']=':page';
        $bind[':page']=array(I('post.CurrentPage'),\PDO::PARAM_INT);
        $list = $column->limit(15)->page($where)->bind($bind)->select();
        $count=$column->count()/15+1;
        $this->ajaxReturn(array("State" => "Success", "Message" => "成功获取模块","Data"=>$list,"PageCount"=>intval($count)), "JSON");
    }
    public function insertColumn(){
        if(!IS_POST){
            $this->display();
        }else{
            $column =M('Column');
            $column->name=I("post.name");
            $column->foldName=I("post.foldName");
            $column->fileName=I("post.fileName");
            $column->parentClass=I("post.parentClass");
            $column->module=I("post.module");
            $column->orderNumber=I("post.orderNumber");
            $column->newWindow=I("post.newWindow");
            $column->isIn=I("post.isIn");
            $column->outUrl=I("post.outUrl");
            $column->isShow=I("post.isShow");
            $column->position=I("post.position");
            $result = $column->add();
            if ($result) {
                $this->ajaxReturn(array("State" => "Success", "Message" => "添加模块成功"), "JSON");
            } else {
                $this->ajaxReturn(array("State" => "Error", "Message" => "添加模块失败"), "JSON");
            }
        }
    }
    public function updateColumn(){
        if(!IS_POST){
            $column =M('Column');
            $where['id']    =    ':id';
            $bind[':id']    =    array(I('get.id'),\PDO::PARAM_INT);
            $item = $column->where($where)->bind($bind)->select();
            if($item){
                $this->assign($item);
                $this->display();
            }else{
                $this->display();
            }
        }else{
            $column =M('Column');
            $column->name=I("post.name");
            $column->foldName=I("post.foldName");
            $column->fileName=I("post.fileName");
            $column->parentClass=I("post.parentClass");
            $column->module=I("post.module");
            $column->orderNumber=I("post.orderNumber");
            $column->newWindow=I("post.newWindow");
            $column->isIn=I("post.isIn");
            $column->outUrl=I("post.outUrl");
            $column->isShow=I("post.isShow");
            $column->position=I("post.position");
            $where['id']    =    ':id';
            $bind[':id']    =    array(I('get.id'),\PDO::PARAM_INT);
            $result = $column->where($where)->bind($bind)->save();
            if ($result) {
                $this->ajaxReturn(array("State" => "Success", "Message" => "添加模块成功"), "JSON");
            } else {
                $this->ajaxReturn(array("State" => "Error", "Message" => "添加模块失败"), "JSON");
            }
        }
    }
    public function read($id=0){
        $column =M('Column');
        $where['id']    =    ':id';
        $bind[':id']    =    array(I('get.id'),\PDO::PARAM_INT);
        $item = $column->where($where)->bind($bind)->select();
        if($item){
            $this->assign($item);
            $this->display();
        }else{
            $this->display();
        }
    }
}