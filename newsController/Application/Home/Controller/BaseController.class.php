<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller{
    function _initialize(){
        //获取分类数据,现在导航上
        $type=M();
		$re = S('ntypeList');
		if(!$re){
		$typeArr=$type->table('ntype')
        ->select();
		S('ntypeList',$typeArr,10);	
		}else{
			$typeArr=$re;
		}
        
        $this->assign('typeArr',$typeArr);
    }
}