<?php 
// koneksi database
include '../config/connection.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
 
// menginput data ke database
mysqli_query($conn,"INSERT INTO users VALUES('','$username','$email','$password')");
 
// mengalihkan halaman kembali ke home.php
header("Location: ../pages/home.php");
?>