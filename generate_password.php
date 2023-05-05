<?php 
session_start();
include('functions.php');
if (isset($_GET['pswleng']) && $_GET['pswleng'] == true) {
	$upperLetters = isset($_GET['upper_letters']) ? true : false;
	$numbers = isset($_GET['numbers']) ? true : false;
	$symbols = isset($_GET['symbols']) ? true : false;
	$repeatChars = isset($_GET['repeat_chars']) ? true : false;
	$password = genera_password($_GET['pswleng'], $upperLetters, $numbers, $symbols, $repeatChars);
	$_SESSION['password'] = $password;
	header("Location: view_password.php");
	exit();
};
?>