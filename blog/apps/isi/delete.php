<?php

class delete
{

     
   public function data2($key)
   {
      global $conn;
      $id = $key['id'];
      if (isset($key)) {
         $tabel = "DELETE FROM data WHERE  id = $id";
         $query = mysqli_query($conn, $tabel) or die(mysqli_error($conn));
         echo "<script> alert('data berhasil dihapus') </script>";
         header("refresh:00.1; url=dashboard.php");
      }
   }  
  
}


$Del = new delete();
if(isset($_GET['id'])) {
   $Del->data2($_GET);
}
