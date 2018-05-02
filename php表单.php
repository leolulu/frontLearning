<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	var_dump($_POST);
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php表单</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<label><input type="text" name="username" id="">用户名</label>
		<br>
		<label><input type="password" name="password" id="">密码</label>
		<br>
		<button type="submit">提交</button>
		<button type="reset">重置</button>
	</form>
</body>
</html>