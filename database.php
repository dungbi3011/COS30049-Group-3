<?php
$host = "localhost";
$user = "root"; 
$pwd = ""; 
$sql_db = "cos30049_dungbi"; // your database
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die ("Something went wrong...");
}

?>