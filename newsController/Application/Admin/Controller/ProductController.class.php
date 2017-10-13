<?php
namespace Admin\Controller;
class ProductController extends BaseController{
    function add(){
        $this->display();
    }
    function save(){
        //先保存产品信息
        $product=D('Producted');
        $re=$product->create();
        if($re){
            $id=$product->add();
            if($id){
                //保存图片
                $upload=new \Think\Upload();
                //设置
                $upload->maxSize=2000000;
                $upload->mimes=array('image/png','image/jpeg','image/gif');
                $upload->autoSub=false;
                $upload->rootPath="./Public/";
                $upload->savePath="Upload/";
                //保存
                $imageRe=$upload->upload();
                if(is_array($imageRe)){
                    //写数据库表productimage
                    $productimage=M('productimage');
                    foreach($imageRe as $v){
                        $savename=$v['savename'];
                        $productimage->add(array('image'=>$savename,'productid'=>$id));
                    }
                }
                $this->success("添加成功",U('Product/oper'),3);
            }
        }else{
            $message=$product->getError();
            $this->assign('message',$message);
            $this->assign('arr',$_POST);
            $this->display('Product/add');
        }
        
    }
    
    function oper(){
        //获取产品记录的总数
        $product=D('Producted');
        $num=$product->count();
        $pagesize=3;
        $page=new \Think\Page($num,$pagesize);
        $start=$page->firstRow;
        $arr=$product->order("id desc")->limit("$start,$pagesize")->select();
        //为每个产品找一个图片
        $productimage=M('productimage');
       
        foreach($arr as $k=>$v){
            $id=$v['id'];
            $imageArr=$productimage->where("productid=$id")->find();
            if($imageArr){
                $imagename=$imageArr['image'];
            }else{
                $imagename="no.jpg";
            }
            $arr[$k]['image']=$imagename;
        }
        $pagestr=$page->show();
        $this->assign('arr',$arr);
        $this->assign('pagestr',$pagestr);
        $this->display();
    }
    function update(){
        $id=$_GET['id'];
        //获取产品信息
        $product=D("Producted");
        $pArr=$product->where("id=$id")->find();
        $this->assign('arr',$pArr);
        //获取图片
        $image=M("productimage");
        $imageArr=$image->where("productid=$id")->select();
        $this->assign('imageArr',$imageArr);
        $this->display();
    }
    function delimage(){
        //删除图片
        $imagename=$_GET['imagename'];
        
        $id=$_GET['imageid'];
        //根据id,删除图片记录 productimage
        $obj=M("Productimage");
        $re=$obj->where("id=$id")->delete();
        if($re){
            unlink("./Public/Upload/".$imagename);
            $this->success("删除成功",'',true);
        }else{
            $this->error('删除失败','',true);
        }
    }
    
    function usave(){
        $id=$_POST['id'];
        //保存图片
        $upload=new \Think\Upload();
        //设置
        $upload->maxSize=2000000;
        $upload->mimes=array('image/png','image/jpeg','image/gif');
        $upload->autoSub=false;
        $upload->rootPath="./Public/";
        $upload->savePath="Upload/";
        //保存
        $imageRe=$upload->upload();
        if(is_array($imageRe)){
            //写数据库表productimage
            $productimage=M('productimage');
            foreach($imageRe as $v){
                $savename=$v['savename'];
                $productimage->add(array('image'=>$savename,'productid'=>$id));
            }
        }
        //保存产品数据
        $product=D('Producted');
        $re=$product->data($_POST)->where("id=$id")->save();
        if($re){
            $this->success("修改成功",U('Product/oper'),3);
        }else{
            $this->error("修改失败",U('Product/oper'),3);
        }
     }
    
    
    
    
    
}