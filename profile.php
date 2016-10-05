<?php
$servername = "localhost";
$username = "root";
$password = "!ntruder";
$dbname = "TalentTrek";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
print
"
<h3>Profile</h3>

";
echo "This is ID# " . $_GET['id'] . "<br>";

$id = (int) $_GET['id'];
$sql = "SELECT id, firstname, lastname FROM Users WHERE id =" . $id;
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
echo $row;

print
"<form action='UpdateData.php' method='post'>
First Name: <input type='text' value='" . $row["firstname"] . "' name='firstname'><br>
Last Name: <input type='text' value='" . $row["lastname"] . "' name='lastname'><br>
<input type='int' hidden='true' value='" . $row["id"] . "' name='id'>
<input type='submit' value='Update Record'>
</form>";


mysqli_close($conn);

print
"
<button onclick=\"window.location.href='Search.Retrieve.php'\">Back to List</button>
";



//<!DOCTYPE html> 
//<html>
//<head>
//<title>display individual profile</title>
//<meta name='viewport' content='width=device-width, initial-scale=1'>

//<!-- Latest compiled and minified CSS -->
//<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

//<!-- jQuery library -->
//<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>



//</head>
//<body>
//<div id='main-div' width='80%' style='auto;'>

//</body>
//</html>"

?> 
