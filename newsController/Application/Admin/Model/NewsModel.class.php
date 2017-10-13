<?php
namespace Admin\Model;
use Think\Model;
class NewsModel extends Model{
    protected $patchValidate = true;
    protected $_validate=array(
        /*标题*/
        array('title','3,20','标题长度应该在3到20位',1,'length'),
        /*内容*/
        array('contents','require','内容不能为空',1,'regex'),
    );
    protected $_auto=array(
        array('addtime','123',1,'string'), 
    );
	protected $_auto=array(
	array('addtime','123',1,'string');
	);
}