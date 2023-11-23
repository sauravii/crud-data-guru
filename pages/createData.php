<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Home</title>
  </head>
  <body style="background-color: #1d2630; color: #ffffff">
    <div class="container mt-5">
      <div class="text-center">
        <h1 class="display-5 mb-5">Tambah Data Guru</h1>
      </div>
      <div class="main row justify-content-center">
        <form method="post" action="../controllers/create.php" id="student-form" class="row justify-content-center mb-4" autocomplete="off">
          <div class="col-10 mb-3">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP guru" name="nip"/>
          </div>
          <div class="col-10 mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama guru" name="nama"/>
          </div>
          <div class="col-10 mb-3">
            <label for="umur">Umur</label>
            <input type="text" class="form-control" id="umur" placeholder="Masukkan nama guru" name="umur" />
          </div>
          <div class="col-10 mb-3">
            <label for="role">Guru Pengampu</label>
            <input type="text" class="form-control" id="role" placeholder="Masukkan role guru" name="role" />
          </div>
          <div class="col-10 mt-4">
            <a href="/home.php">            
              <input type="submit" class="btn btn-success add-btn" value="Submit" />
            </a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
