<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
          crossorigin="anonymous">
    <title>Data Mahasiswa</title>
  </head>

  <body>
      <div class="section1">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Data Mahasiswa</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
              aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                  <li><a class="nav-link active" aria-curretn="page" href="create.php">Add Mahasiswa</a></li>
                  <li><a class="nav-link" href="#">Features</a></li>
                  <li><a class="nav-link" href="#">Pricing</a></li>
                  <li><a class="nav-link" href="#">About</a></li>
                </ul>
            </div>
          </div>
        </nav>
      </div>

      <div class="container data-mahasiwa mt-5">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>

          <tbody>
            <?php
              include 'config.php';
              $no = 1;
              $mahasiwa = mysqli_query($koneksi, "select *from mahasiwa");

              while($data = mysqli_fetch_array($mahasiwa)){
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['nim']; ?></td>
                  <td><?php echo $data['alamat']; ?></td>
                  <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Anda Yakin Akan Menghapus Data Mahasiswa Ini ?')">HAPUS</a>
                  </td>
                </tr>
              <?php
              }
              ?>
          </tbody>
          </table>
        </div>
      </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
          crossorigin="anonymous"></script>
</html>