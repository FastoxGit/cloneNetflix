<?php 

session_start(); // INITIALISE SESSION
session_unset(); // DESACTIVE SESSION
session_destroy(); // DETRUIT SESSION
setcookie('auth', '', time()-1, '/', null, false, true); // DETRUIT COOKIE

header('location: index.php');

?>