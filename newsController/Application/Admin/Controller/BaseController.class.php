<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
    function _initialize(){
        if(!isset($_COOKIE['adminid'])){
            $this->error("请登录",U("Login/index"));
            exit();
        }
    }
}