<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php echo ($_GET['s']); ?>
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

<div>性别:<?php if($_GET['s']== 1): ?>女<?php elseif($_GET['s']== 2): ?>男<?php else: ?>保密<?php endif; ?></div>
<h1>标题:<?php echo ($arr["title"]); ?></h1>
<div>内容:<?php echo ($arr["contents"]); ?></div>
<hr/>
APP:/PSD1705/folder/09-ThickPhp/index.php<br/>
MODULE:/PSD1705/folder/09-ThickPhp/index.php/Home<br/>
URL:/PSD1705/folder/09-ThickPhp/index.php/Home/News<br/>
ACTION:/PSD1705/folder/09-ThickPhp/index.php/Home/News/detail<br/>
PUBLIC:/PSD1705/folder/09-ThickPhp/Public<br/>
</body>
</html>