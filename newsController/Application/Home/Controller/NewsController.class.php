<?php
namespace Home\Controller;
class NewsController extends BaseController{
    
    function tongji(){
        
        //获取每个分类下文章条数
        $ob=M('news');
        $arr=$ob->field("n.type,count(*) as num,t.tname")
                ->alias('n')
                ->group('n.type')
                ->join('ntype as t on n.type=t.id')
                ->having("num<9")
                ->select();
        $this->assign('arr',$arr);
        $this->display();
        
    }
    function listern(){
        
        //传一个二维数组给模板,二维数组和M的返回值一样
        $ob=new \Think\Model('news');
        //获取某分类下的数据
        $tid=isset($_GET['tid'])?$_GET['tid']:0;
		var_dump($tid);
		exit;
        if($tid==0){
            $where="";
        }else{
            $where="n.type=$tid";
        }
        //获取数据库表news中总记录数
        $num=$ob->alias('n')->where($where)->count();
        $pageSize=5;
        $page=new \Think\Page($num,$pageSize);
        $start=$page->firstRow;
        $p=isset($_GET['p'])?$_GET['p']:1;
        $arr=$ob->alias('n')
                ->field("n.id,n.title,t.tname")
                ->join("ntype t on n.type=t.id")
                ->where($where)
                //->limit("$start,5")
                ->page($p,$pageSize)
                ->order("id desc")
                ->select();
        $pageStr=$page->show();
        $this->assign('pageStr',$pageStr);
        $this->assign('arr',$arr);
        $this->display("News/listern");//View/News/listern.html
    }
    function detail(){
        
        $id=$_GET['id'];
        //根据id,获取对应的文章记录,传给模板
        $ob=new \Think\Model('news');
        $arr=$ob->where("id=$id")->find();
        $this->assign('arr',$arr);
        $this->display();
    }
    function save(){
        $this->success("添加成功",U("Home/News/lister",array('page'=>5)),8);
    }
}