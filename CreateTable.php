<?php

// Checking if uid already exist
include 'database.php';

$name = $_POST["uid"];

$check_exists = mysqli_query($conn, "SHOW TABLES LIKE '$name'");
$table_exists = mysqli_num_rows($check_exists) > 0;
if ($table_exists) {
    header("location: ./register.php");
    echo 'Name already taken'.'<br>';
}
// ---------------------------------

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$TableName = $_POST['uid'];

// sql to create table
$sql = "CREATE TABLE {$TableName} (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Title Text
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
  header("location: ./Login.php");
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>