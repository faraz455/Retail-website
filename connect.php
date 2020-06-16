<?php
$databaseHost = 'localhost';
$databaseName = 'retail database';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// initialize loggedIn if it doesn't already exist
if (!isset($_SESSION['loggedIn']))
    $_SESSION['loggedIn'] = 0;
?>
