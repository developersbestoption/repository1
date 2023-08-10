<?php
$hostname = 'localhost'; // or '127.0.0.1'
$username = 'root';
$password = '';
$database = 'sdbms';

// Create a connection
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}
else
{
    echo 'hello';
}
?>