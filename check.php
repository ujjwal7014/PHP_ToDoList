<?php

include 'database.php';

$TableName = $_POST["uid"];

$check_exists = mysqli_query($conn, "SHOW TABLES LIKE '$TableName'");
$table_exists = mysqli_num_rows($check_exists) > 0;
if ($table_exists) {
    // Session Starting
    session_start();
    $_SESSION["uid"] = $TableName;
    header("location: ./ToDoPage.php");
}
else {
    header("location: ./Login.php");
}

$conn -> close;

?>