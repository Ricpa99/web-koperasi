<?php 


$conn = mysqli_connect("localhost", "root", "", "db_koperasi");
if(!$conn){
      die("koneksi gagal");
   }else{
      echo "";
}

class tabel{

  public function tabel($key){
      global $conn;
      $tabel = "SELECT * FROM data ORDER by nama asc";
      $query = mysqli_query($conn, $tabel) or die(mysqli_error($conn));
      return $query;
   }
}

class tabel2{
   
   public function tabel($key){
       global $conn;
       $tabel = "SELECT * FROM cicilan ORDER by nama asc";
       $query = mysqli_query($conn, $tabel) or die(mysqli_error($conn));
       return $query;
    }

    public function daftarNama($key){
      global $conn;
      if (isset($key['detail'])) {
         
         $id = $key['detail'];
         $tabel = "SELECT * FROM data WHERE id = $id";
         $query = mysqli_query($conn, $tabel) or die(mysqli_error($conn));
         $arr = mysqli_fetch_array($query);
         $nama = $arr['nama'];
       
         $cari =  "SELECT * FROM cicilan WHERE nama LIKE '%$nama%'";
         $query = mysqli_query($conn, $cari) or die(mysqli_error($conn));
       
         return $query;
      }
      
   }
}


$tab = new tabel();
$tab2 = new tabel2();

$table = $tab->tabel($_GET);
$Tab2 = $tab2->tabel($_GET);
$m = $tab2->daftarNama($_GET);


?>