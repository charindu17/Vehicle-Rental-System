<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "Project1";

//Creating the connection
$conn = new mysqli($servername,$username,$password,$database);

//Check connection

if($conn->connect_error)
{
    die("Connection Failed : ".$conn->connect_error);
}
echo "Connected Successfully";

?>