<?php
namespace Home\Controller;
class UserController extends BaseController{
    function register(){
        $this->display("User/suibian");
    }
    function save(){
        //保存表单数据入表
        $ob=D("User");
        $re=$ob->create();
        if($re){
            $insertRe=$ob->add();
            if($insertRe){
                $this->success("注册成功",U("Index/index"),3);
            }else{
                $this->error("注册失败",U("User/register"),3);
            }
        }else{
            //获取错误信息
            $message=$ob->getError();
           
            //给模板传错误信息
            $this->assign('message',$message);
            //给模板传POST中的内容
            $this->assign('arr',$_POST);
            //显示模板
            $this->display("User/suibian");
        }
   
    }
}
