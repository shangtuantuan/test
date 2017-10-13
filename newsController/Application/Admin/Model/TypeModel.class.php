<?php
namespace Admin\Model;
use Think\Model;
class TypeModel extends Model{
    protected $tableName="ntype";
    //根据id,获取分类记录
    function getTypeById($id){
        $this->where("id=$id");
        return $this->find();
    }
    /**
     * 产生下拉框中option
     */
    function showTypeToOption($curTypeId=0){
        $arr=$this->where("state<9")->select();
        $optionStr="";
        foreach($arr as $v){
           if($v['id']==$curTypeId)
              $optionStr.="<option selected='selected' value='{$v['id']}'>{$v['tname']}</option>";
           else{
              $optionStr.="<option value='{$v['id']}'>{$v['tname']}</option>";
           }
            
        }
        return $optionStr;
        
        
        
        
        
    }
}