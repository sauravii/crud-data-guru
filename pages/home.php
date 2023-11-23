<?php
  session_start();
    if($_SESSION['valid'] != true){
        echo '<script>window.location="index.php"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Home</title>
  </head>
  <body style="background-color: #1d2630; color: white">
    <div class="text-center">
      <h1 class="display-5 mt-5">Data Guru SMK Telkom Purwokerto</h1>
    </div>

    <div class="main row justify-content-center">
      <div class="col-10 mt-5">
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <td>NIP</td>
              <td>Nama</td>
              <td>Umur</td>
              <td>Guru Pengampu</td>
              <td>Actions</td>
            </tr>
          </thead>
          <tbody class="list-guru">
            <?php 
              include '../config/connection.php';
              $data = mysqli_query($conn,"select * from guru");
              while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $d['nip']; ?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['umur']; ?></td>
                  <td><?php echo $d['role']; ?></td>
                  <td >
                    <a href="../pages/update.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-warning">EDIT</a>
                    <a href="../controllers/delete.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger">HAPUS</a>
                  </td>
                </tr>
                <?php 
              }
              ?>
          </tbody>
        </table>
      </div>
      <div class="col-10 mt-4">
        <a href="./createData.php">
          <input type="submit" class="btn btn-success add-btn" value="Tambah Data" />
        </a>
        <a href="../controllers/logout.php">        
          <input type="submit" class="btn btn-danger" value="Logout" />
        </a>
      </div>
    </div>
  </body>
</html>
