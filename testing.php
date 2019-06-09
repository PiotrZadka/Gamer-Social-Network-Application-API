<?php
$servername = "mypersonaldb.c02v0xwfynp3.us-east-2.rds.amazonaws.com:3306";
$username = "sagiroth";
$password = "zada2601";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
