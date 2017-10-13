<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
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
	<?php if(is_array($typeArr)): foreach($typeArr as $key=>$v): ?><a href="/PSD1705/folder/09-ThickPhp/index.php/Home/News/listern/tid/<?php echo ($v["id"]); ?>"><?php echo ($v["tname"]); ?></a>
	&nbsp;|&nbsp;<?php endforeach; endif; ?>
	<a href="/PSD1705/folder/09-ThickPhp/index.php/Home/User/register">注册</a>
	&nbsp;|&nbsp;
	<a href="/PSD1705/folder/09-ThickPhp/index.php/Home/News/tongji">统计每个分类下文章的条数</a>
</div>
	</body>
</html>

<hr/>
</body>
</html>