<?php
session_start();

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

$task = $_POST["work"];

$sql = "INSERT INTO {$_SESSION['uid']} (Title)VALUES('$task')";

if ($conn->query($sql) === TRUE) {
    header("location: ./ToDoPage.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>