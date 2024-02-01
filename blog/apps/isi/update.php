<?php


class update
{
   public function updt($key, $key2)
   {
      global $conn;
      $id = htmlspecialchars($key['id']);
      $nama = htmlspecialchars($key['nama']);
      $h1 = htmlspecialchars($key['setoran1']);
      $h2 = htmlspecialchars($key['setoran2']);
      $h3 = htmlspecialchars($key['setoran3']);
      $h4 = htmlspecialchars($key['setoran4']);
      $h5 = htmlspecialchars($key['setoran5']);
      $h6 = htmlspecialchars($key['setoran6']);
      $h7 = htmlspecialchars($key['setoran7']);
      $status = htmlspecialchars($key['status']);
      if (empty($nama) or empty($h1) or empty($h2) or empty($h3) or empty($h4) or empty($h5)
         or empty($h6) or empty($h7)) {
         echo "<script> alert('Data yang anda masukkan jangan kosong') </script>";
         return false;
      } else {
         $q2 = "UPDATE data SET status = '$status' WHERE data . id = '$key2'";
         $query = mysqli_query($conn, $q2) or die(mysqli_error($conn));

         $q1 = "UPDATE cicilan SET 
         nama = '$nama', 
         h1 = '$h1', 
         h2 = '$h2', 
         h3 = '$h3', 
         h4 = '$h4', 
         h5 = '$h5', 
         h6 = '$h6', 
         h7 = '$h7' WHERE cicilan . id = '$id'";
         $query = mysqli_query($conn, $q1) or die(mysqli_error($conn));
         echo "<script> alert('Data berhasil di update') </script>";
         header("refresh:0.01");
         return $query;
      }
   }
}

$update = new update();

if (isset($_POST['btnUpdate'])) {
   $update->updt($_POST, $_GET['Id']);
}
