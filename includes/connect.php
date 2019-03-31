<?php
require($_SERVER['DOCUMENT_ROOT'].'/stest/connectconfig.php');

$con_error = 'Could not connect';
$con = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_pass, 'projecting');

if (!$con = mysqli_connect($mysqli_host,$mysqli_user,$mysqli_pass) or !$con_db = mysqli_select_db($con, 'projecting')) {
	die($con_error);
}
?>