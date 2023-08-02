<!DOCTYPE html>
<html>

<head>
</head>

<body>

<?php
// Retrieve list from HTML form
$list = $_POST['list'];
$list2 = $_POST['list2'];


// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL query to store the list
$sql = "INSERT INTO rc1(direction,distance) VALUES ('$list','$list2')";

if ($conn->query($sql) === TRUE) {
    echo "Map stored successfully!";
} else {
    echo "Error storing list: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

</body>
</hrml>