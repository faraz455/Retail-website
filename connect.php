<?php
$databaseHost = 'localhost';
$databaseName = 'retail database';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// initialize loggedIn if it doesn't already exist
if (!isset($_SESSION['loggedIn']))
    {$_SESSION['loggedIn'] = 0;}
if(!isset($_SESSION['login_user'])){
    $_SESSION['login_user'] = "";
}
if (!isset($_SESSION ['check'])){
    $_SESSION ['check'] = 0;
  }
?>
