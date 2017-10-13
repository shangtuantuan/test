<?php
namespace Admin\Model;
use Think\Model;
class ProductModel extends Model{
    protected $_validate=array(
        array('title','/^\S+$/','请填写标题',1),
        array('content','/^\S+$/','请填写简介',1),
        array('price',"/^(0|[1-9]\d*)\.\d{2}$/",'价格格式错误',1,'regex'),
    );
    protected $patchValidate=true;
}