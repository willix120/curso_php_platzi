<?php
$count = 0;

if(isset($_COOKIE['count']) && !empty($_COOKIE['count']) && is_numeric($_COOKIE['count'])){
	$count = $_COOKIE['count'];
}

$count--;

setcookie('count', $count);

header("Location: index.php");