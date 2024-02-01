<?php
require "apps/init.php";
if (!isset($_SESSION['login'])) {
   header("location:login.php");
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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
   <link rel="stylesheet" href="css/index.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="/css/bootstrap.css">
   <link rel="stylesheet" href="/js/bootstrap.js">
   <link rel="stylesheet" href="bootstrap.min.css">
   <title>Tambah nasabah</title>
</head>

<body>
   <article>
   <nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
         <div class="container-fluid p-2 ">
            <a class="navbar-brand" href="index.php">Pinjaman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
               <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item dropdown">
                     <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="nav-link dropdown-item" href="dashboard.php">Dashboard</a></li>
                        <li><a class="nav-link dropdown-item" href="logout.php">Log out</a></li>
                     </ul>
                  </li>
               </ul>
               <form class="d-flex" role="search" method="post">
                  <input name="indexCari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
               </form>
            </div>
         </div>
      </nav>
      <section id="container">
         <div class="row d-flex justify-content-center mt-5">
            <h1 class="text-center">Tambah data nasabah</h1>
            <div class="col-md-5">
               <form action="" method="post">
                  <table class="table bg-none" border="0" cellspacing="0px">
                     <thead>
                        <tr>
                           <td colspan="">Nama </td>
                           <td><input autofocus="on" maxlength="25" autocomplete="off" type="text" name="nama" id="" max="5" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">Jumlah pinjaman</td>
                           <td><input maxlength="20" autocomplete="off" type="text" name="jumlah_pinjaman" id="" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">Jangka waktu</td>
                           <td><input maxlength="20" autocomplete="off" type="text" name="jangka_waktu" id="" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">Tgl mulai pinjaman</td>
                           <td><input maxlength="20" autocomplete="off" type="text" name="tgl_mulai" id="" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">Status</td>
                           <td><input maxlength="33" autocomplete="off" type="text" name="status" id="" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="2"><button class="login text-dark" name="btnTambah" type="submit" style="cursor: pointer;" >Tambah</button></td>
                        </tr>
                        <thead>
                  </table>
               </form>
            </div>
         </div>
      </section>
   </article>
</body>
<script src="js/index.js"></script>

</html>