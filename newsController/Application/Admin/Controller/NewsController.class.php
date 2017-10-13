<?php
//后台的文章控制器
namespace Admin\Controller;
use Think\Upload;

class NewsController extends BaseController{
    /**
     * 文章添加的表单页面
     */
    function add(){
        //获取文章分类数据 M Model类
        $ob=new \Admin\Model\TypeModel();
        $str=$ob->showTypeToOption();
        //传给模板
        $this->assign('str',$str);
        $this->display();
    }
    function save(){
        //图片保存
        $upload=new \Think\Upload();
        $upload->mimes=array('image/png','image/jpeg','image/gif');
        $upload->maxSize=2000000;
        $upload->autoSub=false;
        $upload->rootPath="./Public/";
        $upload->savePath="Upload/";//./Public/Upload/
        $imageRe=$upload->upload();
        
        //数据库操作 M insert into 表名(字段列表) value(值列表)
        $ob=D("News");//先找NewsModel 如果没有 实例化Model
        if($imageRe){
            $_POST['path']=$imageRe['imgs']['savepath'];
            $_POST['image']=$imageRe['imgs']['savename'];
            $image=new \Think\Image();
            //加水印
            $image->open("./Public/Upload/".$imageRe['imgs']['savename']);
            $image->water("./Public/Upload/1.jpg");
            $image->save("./Public/Upload/".$imageRe['imgs']['savename']);
            //生成缩略图
            $image->thumb(200,200,\Think\Image::IMAGE_THUMB_FILLED);
            $image->save("./Public/Upload/s_".$imageRe['imgs']['savename']);
        }else{
            $_POST['path']="";
            $_POST['image']='';
        }
        
        $re=$ob->create();//array|false---验证失败
        if($re){
            $insertRe=$ob->add();
            if($insertRe){
                $this->success("添加成功",U("News/oper"),3);
            }else{
                $this->error("写入失败",U("News/add"),3);
            }
        }else{
            $typeOb=D("Type");
            $str=$typeOb->showTypeToOption($_POST['type']);
            $this->assign('str',$str);
            //验证失败了
            $message=$ob->getError();//获取错误信息
            $this->assign('message',$message);
            $this->assign('arr',$_POST);
            $this->display("News/add");
        }
       
    }
    function oper(){
        $ob=M("news");
        $arr=$ob->field("n.*,t.tname")
                ->order("n.id desc")
                ->alias('n')
                ->join("ntype t on n.type=t.id")
                ->limit("0,15")
                ->select();
        $this->assign('arr',$arr);
        $this->display();
    }
    function update(){
        //根据文章id,获取记录
        $id=$_GET['id'];
        $ob=new \Think\Model('news');
        $arr=$ob->where("id=$id")->find();
        //获取文章分类数据 M Model类
        $ob=new \Think\Model();
        $type=new \Admin\Model\TypeModel();
        $str=$type->showTypeToOption($arr['type']);
        //传给模板
        $this->assign('str',$str);
        
        //传给模板,呈现一个修改表单
        $this->assign('arr',$arr);
        $this->display();
    }
    function usave(){
        $ob=M("news");
        $re=$ob->where("id={$_POST['id']}")
               ->data($_POST)
               ->save();
        if($re){
            $this->success("修改成功",U("News/oper"),3);
        }else{
            
            $this->error("修改失败",U("News/oper"),3);
        }
    }
    function delete(){
        //根据文章id,删除文章 M
        $id=$_GET['id'];
        $ob=new \Think\Model('news');
        //delete from biaoming where 条件
        $re=$ob->where("id=$id")->delete();
        if($re){
            $this->success("删除成功",U("News/oper"),3);
        }else{
            
            $this->error("删除失败",U("News/oper"),3);
        }
    }
    
    
    
}