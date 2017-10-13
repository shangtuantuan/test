<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>my demo</title>
<link type="text/css" rel="stylesheet" href="<?php echo (PUBLIC_URL); ?>Admin/styles/reset.css" media="all"/>
<script type="text/javascript" src="/PSD1705/folder/09-ThickPhp/Public/Admin/js/jquery.js"></script>
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
<script type="text/javascript">
function delimage(name,id){
	$.ajax({
		url:'/PSD1705/folder/09-ThickPhp/index.php/Admin/Product/delimage',
		data:'imagename='+name+'&imageid='+id,
		success:function(re){
			//删除节点
			$("#tr_"+id).remove();
		}
	})
	
	
}

</script>
</head>
<body>
 <div id="wrap">
    <form action="/PSD1705/folder/09-ThickPhp/index.php/Admin/Product/usave" method="post" enctype="multipart/form-data">
          <table>
               <tr>
                     <th colspan="2" class="title" style="font-size:30px">添加产品</th>
               </tr>
               <tr>
                    <td>标题</td>
                    <td><input value="<?php echo ($arr["title"]); ?>"  type="text" name="title" style="margin-right:20px;"/><span><?php echo ($message["title"]); ?></span></td>
               </tr>
               <tr>
                    <td>价格</td>
                    <td>
                       <input value="<?php echo ($arr["price"]); ?>" type="text" name='price' style="margin-right:20px;"/> <span><?php echo ($message["price"]); ?></span> 
                    </td>
               </tr>
               <tr>
                    <td>图片</td>
                    <td>
                    <table style="width:50%">
                    	<?php if(is_array($imageArr)): foreach($imageArr as $key=>$v): ?><tr id="tr_<?php echo ($v["id"]); ?>"><td><img src="/PSD1705/folder/09-ThickPhp/Public/Upload/<?php echo ($v["image"]); ?>" width="100"/></td><td><a href="javascript:delimage('<?php echo ($v["image"]); ?>',<?php echo ($v["id"]); ?>)">删除</a></td></tr><?php endforeach; endif; ?>
                    </table>
                    <input type="file" name="imgs[]" multiple='multiple'/>
                    </td>
               </tr>
               <tr>
                    <td>简介</td>
                    <td>
                        <textarea style="margin-right:20px;" rows="10" cols="50" name="content"><?php echo ($arr["content"]); ?></textarea><span><?php echo ($message["content"]); ?></span>
                    </td>
               </tr>
               <tr>
                     <th colspan="2">
                     	<input type="hidden" name="id" value="<?php echo ($arr["id"]); ?>"/>
                         <input type="submit" value="发布"/>
                     </th>
               </tr>
          </table>
    </form>
 </div>
</body>
</html>