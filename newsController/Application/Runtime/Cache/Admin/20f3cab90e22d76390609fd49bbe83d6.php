<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>my demo</title>
<link type="text/css" rel="stylesheet" href="/psd1705/14_ThinkPHP/Public/Admin/styles/reset.css" media="all"/>
<style>
    #wrap{
	     padding:20px;
    }
     table{
	      width:100%;
     	  border-top:1px solid #ccc;
     	  border-left:1px solid #ccc;
     }
     td,th{
	      border-right:1px solid #ccc;
     	  border-bottom:1px solid #ccc;
     	  padding:8px;
     }
</style>
</head>
<body>
 <div id="wrap"> 
 
          <table>
               <tr>
                     <th colspan="5" class="title" style="font-size:30px">分类列表</th>
               </tr>
               <tr>
                    <td>分类ID</td>
                    <td>分类名称</td>
                    <td>操作</td>
               </tr> 
               <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["tname"]); ?></td>
                <td>
                <a href="/PSD1705/folder/09-ThickPhp/index.php/Admin/Type/update/id/<?php echo ($v["id"]); ?>">修改</a>/
				<a href="/PSD1705/folder/09-ThickPhp/index.php/Admin/Type/delete/id/<?php echo ($v["id"]); ?>">删除</a></td>
               </tr><?php endforeach; endif; ?>
               
          </table>
  
 </div>

</body>
</html>