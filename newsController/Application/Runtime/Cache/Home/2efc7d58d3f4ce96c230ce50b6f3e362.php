<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style type="text/css">
.page{
	margin:10px 0;
}
.page .num,.page .next,.page .prev{
	display:inline-block;
	padding:3px 5px;
	border:1px solid orange;
	background:#f2f2f2;
	margin:0 3px;
}
.page .current{
	display:inline-block;
	padding:3px 5px;
	border:1px solid orange;
	background:#fedcba;
	margin:0 3px;
}
</style>
</head>
<body>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<style>
		
	</style>
	<body>
		<div>
	<?php if(is_array($typeArr)): foreach($typeArr as $key=>$v): ?><a href="/PSD1705/folder/09-ThickPhp/index.php/Home/News/lister/tid/<?php echo ($v["id"]); ?>"><?php echo ($v["tname"]); ?></a>
	&nbsp;|&nbsp;<?php endforeach; endif; ?>
	<a href="/PSD1705/folder/09-ThickPhp/index.php/Home/User/register">注册</a>
	&nbsp;|&nbsp;
	<a href="/PSD1705/folder/09-ThickPhp/index.php/Home/News/tongji">统计每个分类下文章的条数</a>
</div>
	</body>
</html>

<h1>文章列表<<?php echo ($a); ?>></h1>
<table border='1'>
	<?php if(is_array($arr)): foreach($arr as $k=>$v): ?><tr <?php if($k%2 == 0): ?>style='background:#abcdef'<?php else: ?>style='background:#fedcba'<?php endif; ?>>
		<td><?php echo ($v["id"]); ?></td>
		<td><a href="/PSD1705/folder/09-ThickPhp/index.php/Home/News/detail/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></td>
		<td><?php echo ($v["tname"]); ?></td>
		<td><?php echo (date('Y-m-d H:i:s',$v["addtime"])); ?></td>
	</tr><?php endforeach; endif; ?>
</table>
<div class="page"><?php echo ($pageStr); ?></div>
</body>
</html>