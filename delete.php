<?php
    session_start();

    include 'database.php';
    $id=$_GET['id'];

    $sql="DELETE FROM {$_SESSION['uid']} WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./ToDoPage.php");
    }
?>