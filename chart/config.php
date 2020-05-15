<?php 

$databaseHost = 'localhost';
$databaseName = 'ipm';
$databaseUsername = 'root';
$databasePassword = '';

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($con -> connect_errno) {
	echo die("Gagal Menghubungkan ke Database ".$con->connect_error);
}
?>