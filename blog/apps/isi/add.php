<?php 
require "rincian.php";
class add{

   public function add($key){
       global $conn;

       $nama             = htmlspecialchars($key['nama']); 
       $jumlah_pinjaman  = htmlspecialchars($key['jumlah_pinjaman']);
       $jangka_waktu     = htmlspecialchars($key['jangka_waktu']);
       $tgl_mulai        = htmlentities($key['tgl_mulai']);
       $status           = htmlspecialchars( $key['status']);
      if (empty($nama) or empty($jumlah_pinjaman) or empty($jangka_waktu) 
      or empty($tgl_mulai) or empty($status) ){
         echo "<script> confirm('data yang dimasukkan jangan kosong') </script>";
         return false;
      }else{
         
         $tabel = "INSERT INTO data (nama, nilai_pinjaman, jangka_waktu, tgl_mulai_pinjaman, status) 
         VALUES ('$nama', '$jumlah_pinjaman', '$jangka_waktu', '$tgl_mulai', '$status')";
         $query = mysqli_query($conn, $tabel) or die(mysqli_error($conn));
       
         echo "<script> alert('data berhasil dimasukkan') </script>";
         return  $query;
       }
    }
 }
 class add2{
   public function add2($key, $key2){
      global $conn;
      
      $nama         = htmlspecialchars( $key['nama']);
      $setoran1     = htmlspecialchars( $key['setoran1']);
      $setoran2     = htmlspecialchars( $key['setoran2']);
      $setoran3     = htmlspecialchars( $key['setoran3']);
      $setoran4     = htmlspecialchars( $key['setoran4']);
      $setoran5     = htmlspecialchars( $key['setoran5']);
      $setoran6     = htmlspecialchars( $key['setoran6']);
      $setoran7     = htmlspecialchars( $key['setoran7']);
      $kode     = htmlspecialchars( $key['kode']);
      if (empty($nama) or empty($setoran1) or empty($setoran2) or empty($setoran3) or empty($setoran4) or empty($setoran5)
      or empty($setoran6) or empty($setoran7)) {
         echo "<script> alert('Data yang anda masukkan jangan kosong') </script>";
         return false;
      }elseif($nama != $key2['nama']){
         echo "<script> alert('Nama tidak sesuai dengan nama nasabah') </script>";
         return false;
      }else{
         $tabel2 = "INSERT INTO cicilan (kode, nama, h1, h2, h3, h4, h5, h6, h7) 
         VALUES ('$kode','$nama', '$setoran1', '$setoran2', '$setoran3', '$setoran4', '$setoran5', '$setoran6', '$setoran7')";
         $query2 = mysqli_query($conn, $tabel2) or die(mysqli_error($conn));
         echo "<script> confirm('Data berhasil di tambah') </script>";
         header("refresh:0.01;");

      }
      
   }

 }
 
 $Add = new add();
 $Add2 = new add2();

 if (isset($_POST['tambahCicilan'])) {
  $val2 = $Add2->add2($_POST, $detail);
 }
 
 if (isset($_POST['btnTambah'])) {
 $val = $Add->add($_POST);
 }
