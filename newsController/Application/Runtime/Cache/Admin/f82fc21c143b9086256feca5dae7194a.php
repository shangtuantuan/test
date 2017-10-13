<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>my demo</title>
<link type="text/css" rel="stylesheet" href="/PSD1705/folder/09-ThickPhp/Public/Admin/js/jquery.js" media="all"/>
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
 <form action="bathrecycle.php" method="post" >   
          <table>
               <tr>
                     <th colspan="5" class="title" style="font-size:30px">新闻列表</th>
               </tr>
               <tr>
                    <td><input type="checkbox" id="mark" /></td>
                    <td>新闻ID</td>
                    <td>新闻标题</td>
                    <td>新闻分类</td>
                    <td>操作</td>
               </tr> 
               <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo ($v["id"]); ?>"></td>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["title"]); ?></td>
                <td><?php echo ($v["tname"]); ?></td>
                <td>
                <a href="/PSD1705/folder/09-ThickPhp/index.php/Admin/News/update/id/<?php echo ($v["id"]); ?>">修改</a>/
				<a href="/PSD1705/folder/09-ThickPhp/index.php/Admin/News/delete/id/<?php echo ($v["id"]); ?>">删除</a></td>
               </tr><?php endforeach; endif; ?>
               <tr><td colspan="5" ><input type="submit" value="批量回收" /></td></tr>
          </table>
  </form>
 </div>
<script>
//获取复选框对象
var iobj = document.getElementById("mark");
var ids = document.getElementsByName("ids[]");

iobj.onclick = function(){
    //当第一个复选框被选中或者不选中时的事件处理程序
	if(iobj.checked==true){
		 for(var i=0;i<ids.length;i++){
			 ids[i].checked = true;
	     }
	}else{
		 for(var i=0;i<ids.length;i++){
			 ids[i].checked = false;
	     }
	}	
}
</script> 
</body>
</html>