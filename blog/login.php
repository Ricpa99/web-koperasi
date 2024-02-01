<?php
require "apps/init.php";
if (isset($_SESSION['login'])) {
   header("location:index.php");
   exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/login.css">
   <title>Login</title>
</head>

<body>
   <form action="" method="post">
      <div class="body">
         <div class="card">
            <?php if(isset($log)): ?>
               <span style="color: red;"> 
                  <p>masukkan</p><?php echo $log['user'] ?> <br> <?php echo $log['admin'] ?>  
               </span> 
            <?php endif; ?>
            <div class="username">
               <label style="cursor: pointer;" for="user">
                  <h5>Username</h5>
               </label>
               <input maxlength="20" required type="text" name="user" id="user" autocomplete="off">
            </div>
            <div class="password">
               <label style="cursor: pointer;" for="password">
                  <h5>Password</h5>
               </label>
               <input maxlength="20" required type="password" name="password" id="password" autocomplete="off">
            </div>
            <button class="login" style="cursor: pointer;" type="submit" name="login">Login</button>
         </div>
      </div>
   </form>
</body>

</html>