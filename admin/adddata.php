<?php
include "../conn.php";
if(isset($_POST['addPertandingan'])){
    $nama = $_POST['nama'];
    $waktu = $_POST['waktu'];
    $jenis = $_POST['jenis'];



    $q_insert = "INSERT INTO `tb_pertandingan` (`id_pertandingan`, `nama_pertandingan`, `waktu_pertandingan`, `jenis_pertandingan`) VALUES (NULL, '$nama', '$waktu', '$jenis')";


    $InsertResult = mysqli_query($conn,$q_insert);
    if($InsertResult){
        header("Location:pertandingan.php?status=addBerhasil");
    }else{
        header("Location:pertandingan.php?status=addGagal");
    }

  
  }


?>