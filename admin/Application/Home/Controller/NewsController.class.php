<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends BaseController {
    public function insert(){
        $Article =D('Article');
        if($Article->create()){
            $Article->createtime=date("Y-m-d H:i:s");
            $result=$Article->add();
            if($result){
                $this->success('data inserted succeed');
            }else{
                $this->error('data inserted failed');
            }
        }
        else{
            $this->error($Article->getError());
        }
    }
    public function read($id=0){
        $Article =M('Article');
        $data=$Article->find();
        if($data){
            $this->assign('data',$data);
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }
}