<?php
$conn = mysqli_connect("localhost","root","","tugas11");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : ".mysqli_connect_error();
}