<?php 
include '../config/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM guru WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        echo "Record with ID $id has been deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    header("Location: ../pages/home.php");
    exit();
} else {
    echo "Invalid request. Please provide an ID.";
}
?>
