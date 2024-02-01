<?php 
session_start();

class login{

   public function login($key){
      global $conn;
      $nama = $key['user'];
      $password = $key['password'];
      $q1 = "SELECT * FROM user WHERE username = '$nama' ";
      $q2 = mysqli_query($conn, $q1) or die(mysqli_error($conn));
       
      if (mysqli_num_rows($q2) === 1) {
         $q3 = mysqli_fetch_assoc($q2);
         if ($password != $q3['password']) {
            return ['user' => 'username: admin', 'admin' => 'password: admin123'];
            }else{
            $_SESSION['login'] = true;
            header("location:index.php");
            exit;
         }
      }else{
         return ['user' => 'username: admin', 'admin' => 'password: admin123'];

      }
   }
}

$Login = new login();

if (isset($_POST['login'])) {
   $log = $Login->login($_POST);
}










?>