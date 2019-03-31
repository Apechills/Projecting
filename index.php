<?php

//START SESSION
session_start();

//IF SESSION IS ACTIVE REDIRECT
if ($_SESSION['active'] == true) {
	header('Location: ../projecting/dashboard/dashboard.php');
} else {
	header('Location: ../projecting/login/login.php');
}
?>