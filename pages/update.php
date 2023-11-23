<!-- update.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- Add Bootstrap CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: Add custom styles for the form -->
    <style>
        body {
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body style="background-color: #1d2630; color: #ffffff">
<div class="container mt-5">
    <div class="text-center">
        <h1 class="display-5 mb-5">Update Data Guru</h1>
      </div>
    <?php
    include('../config/connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, nip, nama, umur, role FROM guru WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            echo "
            <div class='main row justify-content-center'>
            <form action='../controllers/update.php' method='post' class='row justify-content-center mb-4'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <div class='col-10 mb-3'>
                    <label for='name' class='form-label'>NIP</label>
                    <input type='text' name='nip' class='form-control' value='{$row['nip']}'>
                </div>
                <div class='col-10 mb-3'>
                    <label for='name' class='form-label'>Nama</label>
                    <input type='text' name='nama' class='form-control' value='{$row['nama']}'>
                </div>
                <div class='col-10 mb-3'>
                    <label for='name' class='form-label'>Umur</label>
                    <input type='text' name='umur' class='form-control' value='{$row['umur']}'>
                </div>
                <div class='col-10 mb-3'>
                    <label for='name' class='form-label'>Guru Pengampu</label>
                    <input type='text' name='role' class='form-control' value='{$row['role']}'>
                </div>
                <div class='col-10 mt-4'>
                    <button type='submit' class='btn btn-success add-btn'>Update</button>
                </div>
            </form>
            </div>
        ";
        } else {
            echo "<p class='text-danger'>Record not found</p>";
        }

        $conn->close();
    } else {
        echo "<p class='text-danger'>Invalid request</p>";
    }
    ?>
</div>

<!-- Add Bootstrap JS and Popper.js scripts (place them before the closing body tag) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
