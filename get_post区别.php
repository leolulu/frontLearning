<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get_post区别</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="MY">
		<button>提交</button>
	</form>

	<?php
		echo $_SERVER['REQUEST_METHOD'].'</br>';
		echo $_SERVER['PHP_SELF'];
	?>

</body>
</html>