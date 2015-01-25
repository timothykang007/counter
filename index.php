<?php
	session_start();
	if(empty($_SESSION['counter'])){
		$_SESSION['counter'] = 1;
	}else{
		$_SESSION['counter']++;
	}
	
	// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div id="wrapper">
		<h1>You visited the site</h1>
		<div>
			<p id='counter'>
			<?=
			$_SESSION['counter'];				
			?>
			</p>
			<p>times</p>
			<form action="process.php" method="post">
			<input type="submit" value="Reset" id="submit-button">
			</form>
		</div>
	</div>
</body>
</html>