<?php
$servername = "localhost";
$username = "root";
$password = "!ntruder";
$dbname = "DB1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
print
"<!DOCTYPE html> 
<html>
<head>
<title>test data retrieval</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<!-- Latest compiled and minified CSS -->
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

<!-- jQuery library -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

<!-- Latest compiled JavaScript -->
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'>
</script>
<script>
jQuery(document).ready(function($) {
    $('.clickable-row').click(function() {
        window.document.location = $(this).data('href');
    });
});
</script>
<script src='autocomplete.js'></script>

</head>
<body style='background-color:#ccddcc; font-family:veranda,sans-serif';>

<h3>Data Retrieval</h3>

<form action='' method='get'>
<input type='text' value='' placeholder='Search' name='search'>
<input type='submit' value='Search'>
</form><br>
";


print
"
<div id='maintable'>
<table class='table-hover' style='background-color:#eeffff'>
<tr align='center' style='background-color:#ddeeee'>
<td width='75'>Record<br/>Number</td>
<td width='150'>Name</td>
<td width='250'>email</td>
<td width='200'>Last Updated<br/>Date/Time</td>
</tr>
";

$term = $_GET["search"];
echo $term;
$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests WHERE firstname LIKE '%".$term."%' OR lastname LIKE '%".$term."%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='clickable-row' data-href='profile.php?id=" . $row["id"] . "'> \n \t <td>" . 
	$row["id"]. "</td> \n \t <td>" . $row["firstname"]. " " . $row["lastname"]. "</td> \n \t <td>" . 
	$row["email"]. "</td> \n \t <td>" . $row["reg_date"]. "</td></tr>\n";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
print
"</table><br>
<button onclick=\"window.location.href='testForm.php'\">Add New Record</button>
</div>

<div class='container'>
  <h3>Tabs</h3>
  <ul class='nav nav-tabs'>
    <li class='active'><a href='#'>Home</a></li>
    <li><a href='#'>test 1</a></li>
    <li><a href='#'>Menu 2</a></li>
    <li><a href='#'>Menu 3</a></li>
  </ul>
  <br>
  <p><strong>Note:</strong> This example shows how to create a basic navigation tab. It is not toggleable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done.</p>
</div>


</body>
</html>";
?> 


