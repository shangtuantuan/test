<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>my demo</title>
<link type="text/css" rel="stylesheet" href="/PSD1705/folder/09-ThickPhp/Public/Admin/styles/reset.css" media="all"/>
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
    <form action="/PSD1705/folder/09-ThickPhp/index.php/Admin/Type/save" method="post">
          <table>
               <tr>
                     <th colspan="2" class="title" style="font-size:30px">添加新闻分类</th>
               </tr>
               <tr>
                    <td>新闻分类</td>
                    <td><input   type="text" name="tname"/></td>
               </tr>
               
               <tr>
                     <th colspan="2">
                         <input type="submit" value="发布"/>
                     </th>
               </tr>
          </table>
    </form>
 </div>
</body>
</html>