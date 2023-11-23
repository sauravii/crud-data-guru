<?php 
// connect database
include '../config/connection.php';
 
// get data 
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$role = $_POST['role'];
 
// post data
mysqli_query($conn,"INSERT INTO guru VALUES('','$nip','$nama','$umur','$role')");
 
// redirect to home page
header("Location: ../pages/home.php");
 
?>