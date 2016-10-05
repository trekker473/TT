<?php
session_start();
Session_unset();
session_destroy();
header('location:Login.php');
?>
