<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    protected $patchValidate = true;
    protected $_validate=array(
        array('username','','用户名被占用',1,'unique'),
        array('username','/^[_a-z][_a-z0-9]{3,19}$/i','格式错误',1,'regex'),
        array('nick','/^\S{2,10}$/','昵称格式错误',1,'regex'),
        array('password',"/^\S{6,20}$/","密码格式错误",1,'regex'),
        array('repassword',"password",'两次密码不一致',1,'confirm'),
        array('email',"email",'邮箱格式错误',1,'regex'),
        array('phone','/^1[35789]\d{9}$/','手机号格式错误',1,'regex'),
        array('addr',"require","请填写地址",1),
    );
    protected $_auto=array(
        array('addtime','time',1,'function'),
        array('password','md5',1,'function'),
    );
}