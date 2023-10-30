<?php
  include "../conn.php";

  $sql = "SELECT * FROM tb_pertandingan";
  $result = mysqli_query($conn,$sql);
  $InsertResult = NULL;

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sidebar dengan Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Tambahkan CSS tambahan jika diperlukan */
  </style>
</head>
<body>
<!-- NAV -->
<?php require "view/navbar.php"?>
<!-- NAV -->
<div class="container-fluid " >
  <div class="row" style="height: 100vh">
    <div class="col-3">
     <!-- SIDEBAR -->
        <?php 
        $page = 2;
        require "view/sidebar.php"?>
     <!-- SIDEBAR -->
    </div>
    <div class="col-9 py-3">
      <!-- Konten utama akan ditampilkan di sini -->
      <div class="container">
        <?php
        if(isset($_GET["status"])){
          $msg = $_GET['status'];
        if($msg == "addBerhasil"){
          echo "<div class='alert alert-info' role='alert'>Berhasil Menambahkan Data</div>";
        }if($msg == "addGagal"){
          echo "<div class='alert alert-danger' role='alert'>Gagal Menambahkan Data</div>";

        }        
        else{

        }
        
        }
        ?>
        <div class="row py-3 d-flex justify-content-between">
          <h1>Data Pertandingan</h1>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data
          </button>
        </div>
      </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama Pertandingan</th>
          <th scope="col">Waktu Pertandingan</th>
          <th scope="col">Jenis Pertandingan</th>
        </tr>
      </thead>
      <tbody>
      <?php
          $count = 1;
          while ($row = mysqli_fetch_array($result)){

            ?>

        <tr>
          <th scope="row"><?= $count++?></th>
          <td><?= $row['nama_pertandingan']?></td>
          <td><?= $row['waktu_pertandingan']?></td>
          <td><?= $row['jenis_pertandingan']?></td>
        </tr>
        
    <?php
          }
          
          ?>
      </tbody>
    </table>

<!-- MODAL ADD -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form method="POST" action="addData.php">
        <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
            </div>
            <div class="form-group">
                <label for="waktu">Waktu:</label>
                <input type="date" class="form-control" id="waktu" placeholder="Masukkan Waktu" name="waktu">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis:</label>
                <input type="text" class="form-control" id="jenis" placeholder="Masukkan Jenis" name="jenis">
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="addPertandingan">Tambah Data</button>
      </div>
        </form>
      
    </div>
  </div>
</div>

    

        </div>
      </div>
    </div>

<!-- jQuery and Bootstrap JS -->
<?php
include "script.php";
?>
</body>
</html>
