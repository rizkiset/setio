<?php

$server = "localhost"; 
$user = "root"; 
$pass = ""; 
$database = "session"; 
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


?>