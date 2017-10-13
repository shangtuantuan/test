<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="check" method="post">
用户名:<input type="text" name="aname"/><br/>
密码:<input type="password" name="password"/><br/>
验证码:<input type="text" name="verify"/><img onclick="this.src='/PSD1705/folder/09-ThickPhp/index.php/Home/Verify/show/s/'+Math.random();" src="/PSD1705/folder/09-ThickPhp/index.php/Home/Verify/show"/>
<input type="submit" value="登录"/>
</form>
</body>
</html>