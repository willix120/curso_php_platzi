<?php
$count = 0;

if(isset($_COOKIE['count']) && !empty($_COOKIE['count']) && is_numeric($_COOKIE['count'])){
	$count = $_COOKIE['count'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies Vars Examples</title>
</head>
<body>
	<p>Count Value: <?php echo $count; ?></p>
	<a href="up.php">Up</a>
	<br>
	<a href="down.php">Down</a>
	<hr>
	<a href="unset.php">Unset</a>
</body>
</html>