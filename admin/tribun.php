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
        $page = 1;
        require "view/sidebar.php"?>
     <!-- SIDEBAR -->
    </div>
    <div class="col-9">
      <!-- Konten utama akan ditampilkan di sini -->
     consequuntur?
    </div>
  </div>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
