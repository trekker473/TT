<?php

if($_POST)
{
$host="localhost";
$dbuser="root";
$dbpass="!ntruder";
$db="TalentTrek";

$username=$_POST['username'];
$password=$_POST['password'];


$conn=mysqli_connect($host,$dbuser,$dbpass,$db);
$query="SELECT * from Users where UserName='$username' and Password='$password'";

$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
session_start();
$_SESSION['auth']='true';
$_SESSION['ttuser']=$username;
header('location:tt.main.php');

}
else {$warning= '<div id="warning" align="center"> Incorrect username or password </div>';}

}
?> 
<!DOCTYPE HTML>
<html>
<head>
<title>TalentTrek Login</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="login" align="center">
<?php
echo $warning;
?>

<h2 class="title">Login</h2>
<form method="POST">

<input class="formfield" id="user" type="text" name="username" placeholder="Username"><br>
<input class="formfield" id="password" type="password" name="password" placeholder="Password"><br>
<input class="submit" type="submit" value="Sign in">
</form>
<br>
<a href="NewUserForm.php">Create New Account</a>
</div>
</body>
</html>

