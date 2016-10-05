<?php

if($_POST)
{
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$role = $_POST['role'];
$group = $_POST['group'];


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



//Check that user does not exist
$query="SELECT * from Users where UserName='$username'";
$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0){
	$warning ='<div id="warning" align="center"> User, "' . $username . '" already exists! </div>';
	}

//Check that password is not empty
else{
	if($password==""){
	$warning ='<div id="warning" aligh="center"> Password is required!</div>';
	}

//Check to see if password and repeated password match
else { 
	if ($password!==$repassword) {
	$warning='<div id="warning" align="center"> Passwords do not match! Please try again </div>';
	}

//Check to see that password is at least 6 characters long
else {
	if (strlen($password)<= '6') {
	$warning='<div id="warning" align="center"> Password must be at least 6 characters in length! </div>';
	}

//Create new User
else{

$sql = "INSERT INTO Users (UserName, Password, firstname, lastname)
VALUES ('$username', '$password', '$firstname', '$lastname')";

if (mysqli_query($conn, $sql)) {
    print "

<div id='success' align='center'>
<h3>New user created successfully</h3><br>
<button id='createanother' onclick=\"window.location.href='NewUserForm.php'\">Create another user</button><br>
<button id='backtologin' onclick=\"window.location.href='Login.php'\">Back to Login</button>
</div>

";

} 
    else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
}
}
}

mysqli_close($conn);

}



else{

$username = "";
$password = "";
$repassword = "";
$firstname = "";
$lastname = "";
$email = "";
$role = "";
$group = "";
$warning=" ";
}

print"

<!DOCTYPE html> 
<html>
<head>
<title>New User</title>
<link rel='stylesheet' type='text/css' href='style1.css'>
</head>
<body>
<div class='login' align='center'>
" . $warning ."
<h3>Create New User</h3>
<form method='POST'>
<input class='formfield' type='text' name='username' placeholder='Username' value='" . $username ."'><br>

<input class='formfield' type='password' name='password' placeholder='Password'><br>

<input class='formfield' type='password' name='repassword' placeholder='Confirm Password'><br>

<input class='formfield' type='text' name='firstname' placeholder='First Name' value='" . $firstname . "'><br>

<input class='formfield' type='text' name='lastname' placeholder='Last Name' value='" . $lastname . "'><br>

<input class='formfield' type='text' name='email' placeholder='E-mail' value='" . $email . "'><br>

<input class='formfield' type='text' name='role' placeholder='User Role' value='" . $role . "'><br>

<input class='formfield' type='text' name='group' placeholder='User Group' value='" . $group . "'><br>
<input class='submit' type='submit' value='Save New User'>
</form>
</div>
</body>
</html>";


?>
