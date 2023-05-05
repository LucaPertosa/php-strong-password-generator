<?php 
session_start();
include('functions.php');
if (isset($_GET['pswleng']) && $_GET['pswleng'] == true) {
    $get_psw = genera_password($_GET['pswleng']);
    $_SESSION['password'] = $get_psw;
    header("Location: view_password.php");
	exit();
};
?>