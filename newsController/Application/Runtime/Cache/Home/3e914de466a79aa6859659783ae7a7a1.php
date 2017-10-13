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

<h1>会员注册:</h1>
<form action="/PSD1705/folder/09-ThickPhp/index.php/Home/User/save" method="post">
<table>
	<tr>
		<td>用户名:</td>
		<td><input type="text" value="<?php echo ($arr["username"]); ?>" name="username"/></td>
		<td><?php echo ($message["username"]); ?></td>
	</tr>
	<tr>
		<td>昵称:</td>
		<td><input type="text" value="<?php echo ($arr["nick"]); ?>" name="nick"/></td>
		<td><?php echo ($message["nick"]); ?></td>
	</tr>
	<tr>
		<td>密码:</td>
		<td><input value="<?php echo ($arr["password"]); ?>" type="password" name="password"/></td>
		<td><?php echo ($message["password"]); ?></td>
	</tr>
	<tr>
		<td>确认密码:</td>
		<td><input value="<?php echo ($arr["repassword"]); ?>" type="password" name="repassword"/></td>
		<td><?php echo ($message["repassword"]); ?></td>
	</tr>
	<tr>
		<td>邮箱:</td>
		<td><input type="text" value="<?php echo ($arr["email"]); ?>" name="email"/></td>
		<td><?php echo ($message["email"]); ?></td>
	</tr>
	<tr>
		<td>手机:</td>
		<td><input type="text" value="<?php echo ($arr["phone"]); ?>" name="phone"/></td>
		<td><?php echo ($message["phone"]); ?></td>
	</tr>
	<tr>
		<td>性别:</td>
		<td><input type="radio" checked="checked" name="sex" value="1"/>男<input type="radio" name="sex" value="2"/>女</td>
		<td></td>
	</tr>
	<tr>
		<td>地址:</td>
		<td><input type="text" value="<?php echo ($arr["addr"]); ?>" name="addr"/></td>
		<td><?php echo ($message["addr"]); ?></td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" value="注册"/></td>
	</tr>
</table>
</form>
</body>
</html>