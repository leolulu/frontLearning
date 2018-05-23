<?php  
function fuc(){
	global $mybl;
	$mybl = '我是变量14';
	echo $mybl;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>global_globals</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<button>提交</button>
	</form>

	<?php
		echo $_SERVER['REQUEST_METHOD'].'</br>';
		echo $_SERVER['PHP_SELF'].'</br>';
		fuc();
	?>

</body>
</html>