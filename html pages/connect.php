<?php
$databaseHost = 'localhost';
$databaseName = 'retail database';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// initialize loggedIn if it doesn't already exist
if (!isset($_SESSION['logIn']))
    {$_SESSION['logIn'] = 0;}
if(!isset($_SESSION['login_User'])){
    $_SESSION['login_User'] = "";
}

?>
