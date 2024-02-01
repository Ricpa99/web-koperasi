<?php 

class cari{

   public function cariIndex($key){
      global $conn;
      $nama = $key['indexCari'];
      $q1 =  "SELECT * FROM data  WHERE nama LIKE '%$nama%' OR nilai_pinjaman LIKE '%$nama%' OR jangka_waktu LIKE '%$nama%' OR tgl_mulai_pinjaman LIKE '%$nama%'";
      $query = mysqli_query($conn, $q1) or die(mysqli_error($conn));
      return $query;
   }

   public function cariDasboard($key){
      global $conn;
      $nama = $key['dasboardCari'];
      $q1 =  "SELECT * FROM data  WHERE nama LIKE '%$nama%' OR nilai_pinjaman LIKE '%$nama%' OR jangka_waktu LIKE '%$nama%' OR tgl_mulai_pinjaman LIKE '%$nama%'";
      $query = mysqli_query($conn, $q1) or die(mysqli_error($conn));
      return $query;
   }
   public function detailCari($key){
      global $conn;
      $nama = $key['detailCari'];
      $q1 =  "SELECT * FROM cicilan  WHERE h1 LIKE '%$nama%' OR h2 LIKE '%$nama%' OR h3 LIKE '%$nama%' OR h4 LIKE '%$nama%' OR h5 LIKE '%$nama%' OR h6 LIKE '%$nama%' OR h7 LIKE '%$nama%'";
      $query = mysqli_query($conn, $q1) or die(mysqli_error($conn));
      return $query;
   }
   
}

$Cari = new cari();


if (isset($_POST['indexCari'])) {
   $table = $Cari->cariIndex($_POST);
}elseif(isset($_POST['dasboardCari'])){
   $table = $Cari->cariDasboard($_POST);
}elseif (isset($_POST['detailCari'])) {
   $m = $Cari->detailCari($_POST);
   
}














?>