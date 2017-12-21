<?php 
require_once 'connection.php';
unset($_SESSION['userId']);
header('Location: index.php');
?>