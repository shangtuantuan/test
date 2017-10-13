<?php
namespace Admin\Controller;
class TypeController extends BaseController{
    function add(){
        $this->display();
    }
    function save(){
        $ob=M('ntype');
        $re=$ob->data($_POST)->add();
        if($re){
            $this->success("添加成功",U("Type/oper"),3);
        }else{
            $this->error("添加失败",U("Type/add"),3);
        }
    }
    function oper(){
        //获取所有的分类数据
        $ob=M("ntype");
        $arr=$ob->where("state<9")->select();
        $this->assign('arr',$arr);
        $this->display();
    }
    function delete(){
        //根据文章id,修改文章记录的state=9
        $id=$_GET['id'];
        $ob=M('ntype');
        $re=$ob->where("id=$id")->data(array('state'=>8))->save();
        if($re){
            $this->success("删除成功",U("Type/oper"),3);
        }else{
            $this->error("删除失败",U("Type/oper"),3);
        }
    }
    function update(){
        //根据id,获取分类记录
        $id=$_GET['id'];
        //$ob=M("ntype");
        //$arr=$ob->where("id=$id")->find();
        $ob=new \Admin\Model\TypeModel();
        $arr=$ob->getTypeById($id);
        var_dump($arr);
        //传到模板上
        $this->assign('arr',$arr);
        $this->display();
    }
    function usave(){
        //根据文章id,修改文章记录的state=9
        $id=$_POST['id'];
        $ob=M('ntype');
        $re=$ob->where("id=$id")->data($_POST)->save();
        if($re){
            $this->success("修改成功",U("Type/oper"),3);
        }else{
            $this->error("修改失败",U("Type/oper"),3);
        }
    }
    
    
    
    
}