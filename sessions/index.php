<?php
session_start();

$counter = 0;

if(isset($_SESSION['counter']) && !empty($_SESSION['counter'])){
	$counter = $_SESSION['counter'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sessions Examples</title>
</head>
<body>
	<h3>Sessions Counter Var</h3>
	<p>Count: <?php echo $counter; ?></p>
	<a href="add.php">Increment</a><label><=></label><a href="restar.php">Decreased</a>
	<hr/>
	<a href="logout.php">Logout</a>
</body>
</html>