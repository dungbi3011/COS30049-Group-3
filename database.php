<?php
$host = "localhost";
$user = "root"; 
$pwd = ""; 
$sql_db = "innovative_project"; // your database
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die ("Something went wrong...");
}

?>