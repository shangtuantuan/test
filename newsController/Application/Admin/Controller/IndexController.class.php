<?php
namespace Admin\Controller;
class IndexController extends BaseController{
    function index(){
        $this->display();//后台首页
    }
    function welcome(){
        echo "<h1>欢迎[admin]登录.</h1>";
    }
}