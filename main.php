<?php
	session_start();
	$_COOKIE['count']?($c = $_COOKIE['count']+1):($c =1);
	setcookie('count',$c);
?>
<html>
<head>
</head>
<body>
	Welcome <?php echo $_COOKIE['mycookie_name']; ?>!<br/>
	You have visited the site <?php echo $_COOKIE['count'] ?> times.
	<a href="logout.php">logout</a>
</body>	
</html>