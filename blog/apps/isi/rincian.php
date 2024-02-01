<?php

class detail
{

   function detail($key)
   {
      if (isset($key['detail'])) {
         global $conn;
         $id = $key['detail'];

         $tabel = "SELECT * FROM data WHERE id = $id";
         $query = mysqli_query($conn, $tabel) or die(mysqli_error($conn));
         $arr = mysqli_fetch_array($query);

         return $arr;
      }
   }

   public function update($key)
   {
      if (isset($key['update'])) {
         global $conn;
         $id = $key['update'];
         $q1 = "SELECT * FROM cicilan WHERE id = '$id'";
         $query = mysqli_query($conn, $q1);
         $arr = mysqli_fetch_assoc($query);
         return $arr;
      }
   }
}

$Detail = new detail();
$detail = $Detail->detail($_GET);

$detailupdate = $Detail->update($_GET);
