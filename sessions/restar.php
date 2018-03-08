<?php
session_start();

$_SESSION['counter']--;

header("Location: index.php");