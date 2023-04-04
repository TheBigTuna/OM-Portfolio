<?php
// Localhost Connection
$servername = "localhost";
$username = "root";
$password = "";

// Dreamhost Connection
// $hostname = "omoore94.animerooms.com";
// $username = "omoore94";
// $password = "!Deandre94";
// $database = "omoore94_animerooms";

// Localhost Connection
$conn = mysqli_connect($servername, $username, $password);

// Dreamhost Connection
// $conn = mysqli_connect($hostname, $username, $password, $database);
// if($conn == true){
    // echo "Connected";
// }
?>