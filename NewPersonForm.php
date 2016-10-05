<?php

if($_POST)
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$PhoneNumber = $_POST['PhoneNumber'];


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



//Check that person does not exist
//$query="SELECT * from People where firstname='$firstname'";
//$result=mysqli_query($conn,$query);
	//if(mysqli_num_rows($result)>0){
	//$warning ='<div id="warning" align="center"> User, "' . $username . '" already exists! </div>';
	//}


//---------Create new Person-----------
else{

$sql = "INSERT INTO People (firstname, lastname)
VALUES ('$firstname', '$lastname')";


if (mysqli_query($conn, $sql)) {
    print "

<div id='success' align='center'>
<h3>New user created successfully</h3><br>
<button id='createanother' onclick=\"window.location.href='NewPersonForm.php'\">Create another user</button><br>
<button id='backtologin' onclick=\"window.location.href='Login.php'\">Back to Login</button>
";
$NewPersonID = mysqli_insert_id($conn);

Print"
<br>Hello" . $NewPersonID . "
</div>
";

} 
    else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
}
//---------Create Email Address--------
$sql2 = "INSERT INTO EmailAddresses (personID, emailAddress)
VALUES ('$NewPersonID', '$email')";
mysqli_query($conn, $sql2);



mysqli_close($conn);

}

else{

$firstname = "";
$lastname = "";
$email = "";
$role = "";
$warning=" ";
}

print"

<!DOCTYPE html> 
<html>
<head>
<title>New Person</title>
<link rel='stylesheet' type='text/css' href='style1.css'>
</head>
<body>
<div class='login' align='center'>
" . $warning ."
<h3>Add New Personr</h3>
<form method='POST'>

<input class='formfield' type='text' name='firstname' placeholder='First Name' value='" . $firstname . "'><br>

<input class='formfield' type='text' name='lastname' placeholder='Last Name' value='" . $lastname . "'><br>

<input class='formfield' type='text' name='email' placeholder='E-mail' value='" . $email . "'><br>

<input class='formfield' type='text' name='phone' placeholder='Phone Number' value='" . $PhoneNumber . "'><br>

<input class='formfield' type='text' name='group' placeholder='Address Line1' value='" . $address . "'><br>

<input class='formfield' type='text' name='group' placeholder='Address Line2' value='" . $address2 . "'><br>

<input class='formfield' type='text' name='group' placeholder='City' value='" . $city . "'>

<input class='formfield' type='text' name='group' placeholder='State' value='" . $state . "'><br>

<input class='formfield' type='text' name='group' placeholder='Zip Code' value='" . $zipcode . "'>
-
<input class='formfield' type='text' name='group' placeholder='' value='" . $zipplus4 . "'><br>


<input class='submit' type='submit' value='Save New User'>
</form>
</div>
</body>
</html>";


?>
