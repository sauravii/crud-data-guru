<?php
include('../config/connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $role = $_POST['role'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE guru SET nip='$nip', nama='$nama', umur='$umur', role='$role' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../pages/home.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request";
}
?>
