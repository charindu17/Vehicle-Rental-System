<?php
    include 'config.php';

    $email = $_POST["email"];

    $sql = "INSERT INTO newsletters(email) ";
    $sql .= "VALUES ('$email')";

    if($conn->query($sql))
    {
        echo "<script>alert('Subscribed !')
        window.location.href='home.php';</script>";
        // header("Location:home.php");
    }
    else
    {
        echo "<script>alert('Error in Insertion')</script>";
    }

    $conn->close();



?>