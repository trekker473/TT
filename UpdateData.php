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

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$emailAddress = $_POST["emailAddress"];
$id = $_POST["id"];

$sql = "UPDATE Users SET firstname='".$firstname."' ,lastname='".$lastname."', emailAddress='".$emailAddress."' Where id=".$id."";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

print
"
<html>
<body
<br><br><button onclick=\"window.location.href='Search.Retrieve.php'\">Back to List</button>
</body>
</html>";
mysqli_close($conn);
?> 
