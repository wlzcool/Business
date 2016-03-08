<?php
/**
 * Created by PhpStorm.
 * User: wanglingzhi
 * Date: 2016/3/2
 * Time: 17:23
 */
namespace Home\Modeldel;
use Think\Model;
class ArticleModel extends Model{
    protected $_validate =array(
        array('title','require','标题必须'),
    );

    protected $_auto=array(
        array('createtime',"date",1,'function'),
    );
}