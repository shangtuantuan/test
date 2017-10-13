<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    function index(){
        $this->display();
    }
    function check(){
        $auser=$_POST['aname'];
        $password=$_POST['password'];
        $verifynum=$_POST['verify'];
        $verify=new \Think\Verify();
        if(!$verify->check($verifynum)){
            $this->error("验证码错误",U("Login/index"));
            exit();
        }
        if($auser=='tom' && $password="123456"){
           setcookie("adminid",1,0,'/'); 
           $this->redirect("Admin/Index/index");
        }else{
           $this->error("登录失败",U("Login/index"));
        }
    }
}