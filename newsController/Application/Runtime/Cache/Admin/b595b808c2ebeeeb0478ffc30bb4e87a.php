<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style type="text/css">
*{
	padding:0;
	margin:0;
	border:0;
}
.header{
	height:80px;
	line-height:80px;
	background:purple;
	color:white;
}
.content{
	width:100%;
	margin-top:8px;
}
.content .menu{
	width:15%;
	float:left;
	background:#abcdef;
	
}
.content .menu div{
	padding:10px;
}
.content .main{
	width:85%;
	float:right;
	
}
.content #show{
	width:100%;
}
.content .main div{
	margin-left:8px;
	background:#f2f2f2;
}
</style>
<script type="text/javascript" src="/PSD1705/folder/09-ThickPhp/Public/Admin/js/jquery.js"></script>
<script type="text/javascript">
$(function(){                    
	//页面加载完成之后                     D:\PSD1705\folder\09-ThickPhp\Public\Admin\js\Public\Admin\js
	setHeight();
	$(window).resize(setHeight);
});
function setHeight(){
	var winH=$(window).height();
	var divH=winH-88;
	$(".menu").css('height',divH+"px");
	$("#show").css('height',divH-4+"px");
}
</script>
</head>
<body>
<div class="header">
	<h1>PSD1705</h1>
</div>
<div class="content">
	<div class="menu">
		<div>
		<h3>分类</h3>
		<a href="/PSD1705/folder/09-ThickPhp/index.php/Admin/Type/add" target="show">添加</a>
		<a href="/PSD1705/folder/09-ThickPhp/index.php/Admin/Type/oper" target="show">管理</a>
		<h3>文章</h3>
		<a href="/PSD1705/folder/09-ThickPhp/index.php/Admin/News/add" target="show">添加</a>
		<a href="/PSD1705/folder/09-ThickPhp/index.php/Admin/News/oper" target="show">管理</a>
		<h3>产品</h3>
		<a href="/PSD1705/folder/09-ThickPhp/index.php/Admin/Product/add" target="show">添加</a>
		<a href="/PSD1705/folder/09-ThickPhp/index.php/Admin/Product/oper" target="show">管理</a>
		
		</div>
	</div>
	<div class="main">
		<div><iframe style="padding:0;margin-top:0;border:0;" name="show" src="/PSD1705/folder/09-ThickPhp/index.php/Admin/Index/welcome" id="show"></iframe></div>
	</div>
</div>
</body>
</html>