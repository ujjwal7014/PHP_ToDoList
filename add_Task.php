<?php
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

$sql = "INSERT INTO todos(Title)VALUES('$task')";

if ($conn->query($sql) === TRUE) {
    header("location: ./index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>