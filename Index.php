<?php
session_start();
if(!$_SESSION ['auth'])
{
	header('location:Login.php');
}

$ttuser=$_SESSION['ttuser'];

$host="localhost";
$dbuser="root";
$dbpass="!ntruder";
$db="TalentTrek";

// Create connection
$conn = mysqli_connect($host, $dbuser, $dbpass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname, emailAddress, UserRole, UserGroup FROM Users WHERE UserName ='". $ttuser ."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$firstname = $row["firstname"];
$lastname = $row["lastname"];


mysqli_close($conn);


print "
<!DOCTYPE HTML>
<html>
<head>
<title>TalentTrek</title>
<link rel='stylesheet' type='text/css' href='style1.css'>
</head>
<body>
<div class='header'>
<h3 id='namelable'>" . $firstname . " " . $lastname . "</h3>
<a href='LogOut.php'>Click here to log out</a>
";


?>
