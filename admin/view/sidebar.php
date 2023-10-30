<?php


$active1 = ($page == 1) ?"active":"";
$active2 = ($page == 2) ?"active":"";
$active3 = ($page == 3) ?"active":"";
$active4 = ($page == 4) ?"active":"";



?>



<div class="bg-dark p-4 h-100">
        <ul class="list-group">
          <a href="#" class="list-group-item list-group-item-action mb-3 <?= $active1 ?>">Data Tribun</a>
          <a href="#" class="list-group-item list-group-item-action mb-3 <?= $active2 ?>">Data Pertandingan</a>
          <a href="#" class="list-group-item list-group-item-action mb-3 <?= $active3 ?>">Verifikasi</a>
          <a href="#" class="list-group-item list-group-item-action mb-3 <?= $active4 ?>">Data Penonton</a>
        </ul>
</div>