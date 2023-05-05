<?php
session_start();

if(isset($_SESSION['password'])) {
	echo "La tua password casuale è: ".$_SESSION['password'];
	unset($_SESSION['password']);
} else {
	echo "Password non trovata";
}
?>