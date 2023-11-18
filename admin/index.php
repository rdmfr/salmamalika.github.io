<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data Pasien</title>
  </head>
  <body>
   
    <div class="container">

        <h1 class="page-header" align="center">Data Base Pasien</h1>
    <div class="row-1g-12">
    <a class="btn btn-success mb-2" href="tambah.php">+Add New Data</a>
    <a class="btn btn-info mb-2" href="../index.html">Back To Home</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>ACTION</th>
          </tr>
        </thead>
        
        <tbody>
          <?php
            include "koneksi.php";
            $santika=mysqli_query($conn, "SELECT * FROM tb_pasien");
            $no=1;
            while($data=mysqli_fetch_array($santika)){
          ?>

          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['gender']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td>
              <a class="btn btn-warning">Update</a>
              <a class="btn btn-danger"href="hapus.php?id_pasien=<?php echo $data ['id_pasien'];?>">Delete</a>
            </td>

          </tr>
          <?php } ?>
        </tbody>

      </table>

      </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>