<?php
$servername = "localhost";
$username = "root";
$password = "!ntruder";
$dbname = "TalentTrek";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE TalentTrek";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br><br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);



//CREATE Actions Table


// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Actions (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ActionType INT(3),
Description VARCHAR(255),
Details TEXT,
CreatedDate TIMESTAMP,
UpdatedDateTime DATETIME,
ScheduledDateTime DATETIME,
CompletedDateTime DATETIME
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Actions created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Action Types Table


// sql to create table
$sql = "CREATE TABLE ActionTypes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ActionType VARCHAR(40),
UseForCompany TINYINT,
UseForJobOrder TINYINT,
UseForContact TINYINT,
USeForCandidate TINYINT,
UseForPeople TINYINT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table ActionTypes created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Address Table


// sql to create table
$sql = "CREATE TABLE Addresses (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
personID INT(10),
companyID INT(10),
AddressLn1 VARCHAR(50),
AddressLn2 VARCHAR(50),
City VARCHAR(50),
State VARCHAR (50),
ZipCode INT(5),
plus4 INT(4),
AddressType INT(3)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Addresses created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Address Types Table


// sql to create table
$sql = "CREATE TABLE AddressTypes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AddressType VARCHAR(40),
UseForPhone TINYINT,
UseForEmail TINYINT,
UseForAddress TINYINT,
UseForCompany TINYINT,
UseForPeople TINYINT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Actions created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Candidates Table


// sql to create table
$sql = "CREATE TABLE Candidates (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Person INT(10),
JobOrder INT(10),
CandidateStatus INT(3),
PayRate DECIMAL(8,2),
BillRate DECIMAL(8,2),
Salary DECIMAL(8,2),
PrimaryPhone INT(10),
PrimaryEmail INT(10),
PrimaryAddress INT(10),
candidateNotes TEXT,
created_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Candidates created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

//CREATE Candidate Status Table


// sql to create table
$sql = "CREATE TABLE CandidateStatus (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Status VARCHAR(30),
Active TINYINT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table CandidateStatus created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

//CREATE Client Status Table


// sql to create table
$sql = "CREATE TABLE CliantStatus (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Status VARCHAR(30),
Active TINYINT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table CliantStatus created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Companies Table


// sql to create table
$sql = "CREATE TABLE Companies (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
companyName VARCHAR(50) NOT NULL,
companyStatus INT(3),
companynotes TEXT,
url VARCHAR(30),
CreatedDate TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Companies created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Contact Role Table


// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE ContactRoles (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ROLE VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table ContactRoles created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Contacts Table


// sql to create table
$sql = "CREATE TABLE Contacts (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Person INT(10),
Company INT(10),
Title VARCHAR(50),
PrimaryPhone INT(10),
PrimaryEmail INT(10),
PrimaryAddress INT(10),
contactNotes TEXT,
created_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Contacts created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Contact Status Table


// sql to create table
$sql = "CREATE TABLE ContactStatus (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Status VARCHAR(30),
Active TINYINT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table ContactStatus created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Documents Table


// sql to create table
$sql = "CREATE TABLE Documents (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
DocumentType INT(3),
DocumentName VARCHAR(255),
Description VARCHAR(255),
DocumentPath VARCHAR(255),
CreatedDateTime TIMESTAMP,
UpdatedDateTime DATETIME
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Documents created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Document Types Table


// sql to create table
$sql = "CREATE TABLE DocumentTypes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
DocumentType VARCHAR(40),
UseForCompany TINYINT,
UseForJobOrder TINYINT,
UseForPeople TINYINT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table DocumentTypes created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Email Addresses Table


// sql to create table
$sql = "CREATE TABLE EmailAddresses (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
personID INT(10),
companyID INT(10),
emailAddress VARCHAR(50),
addressType INT(3)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table EmailAddresses created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE JOb Orders Table


// sql to create table
$sql = "CREATE TABLE JobOrders (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Company INT(10),
JobTitle VARCHAR(40),
JobDescription TEXT,
MaxPay	DECIMAL(8,2),
MaxBill	DECIMAL(8,2),
MaxSalary  DECIMAL(8,2),
WorksiteAddress INT(10),
JobOrderNotes TEXT,
CreatedDate TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table JobOrders created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Job Order Status Table


// sql to create table
$sql = "CREATE TABLE JobOrderStatus (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Status VARCHAR(30),
Active TINYINT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table JobOrderStatus created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE People Table


// sql to create table
$sql = "CREATE TABLE People (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
goesbyname VARCHAR(30),
peopleNotes TEXT,
created_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table People created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Phone Numbers Table


// sql to create table
$sql = "CREATE TABLE PhoneNumbers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
personID INT(10),
companyID INT(10),
countryCode VARCHAR(5),
AreaCode VARCHAR(3),
phoneNumber VARCHAR(7),
phoneType INT(3)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table PhoneNumbers created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE User Groups Table


// sql to create table
$sql = "CREATE TABLE UserGroups (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
UserGroup VARCHAR(30),
Active TINYINT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table UserGroups created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE User Roles Table


// sql to create table
$sql = "CREATE TABLE UserRoles (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ROLE VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table UserRoles created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE Users Table


// sql to create table
$sql = "CREATE TABLE Users (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
UserName VARCHAR(15),
Password VARCHAR(128),
hash VARCHAR(12),
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
PeopleID INT(10),
emailAddress INT(10),
UserRole INT(10),
UserGroup INT(3),
Active TINYINT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


//CREATE User Roles Table


// sql to create table
$sql = "CREATE TABLE ChangeLogs (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Time TIMESTAMP,
RecordType INT(3),
RecordNumber INT(10),
DeletedYN INT(1),
DeletedReason VARCHAR(127),
fieldname VARCHAR(56),
OldValue VARCHAR(255),
NewValue VARCHAR(255),
User INT(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table ChangeLogs created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}



$conn->close();

?> 
