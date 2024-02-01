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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
   <link rel="stylesheet" href="css/index.css">
   <title>Home</title>
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
            <h1 class="text-center">Daftar nama pinjaman</h1>
            <div class="col-md-5">
               <table class="table table-bordered table-striped table-hover" border="" cellspacing="0">
                  <thead>
                     <tr >
                        <th class="bg-primary">No</th>
                        <th class="bg-primary">Nama</th>
                        <th class="bg-primary">Jumlah pinjaman</th>
                        <th class="bg-primary">jangka waktu</th>
                        <th class="bg-primary">Tgl mulai pinjaman</th>
                        <th class="text-center bg-primary" colspan="2">aksi</th>
                     </tr>
                  <thead>
                  <tbody>
                     <?php $no = 1;
                     foreach ($table as $row) : ?>
                        <tr>
                           <td><?php echo $no++ ?></td>
                           <td><?php echo $row['nama'] ?></td>
                           <td><?php echo $row['nilai_pinjaman'] ?></td>
                           <td><?php echo $row['jangka_waktu'] ?></td>
                           <td><?php echo $row['tgl_mulai_pinjaman'] ?></td>
                           <td style="text-align: center;"><a class=" nav-link text-decoration-none text-dark bg-none" href="detail.php?detail=<?php echo $row['id'] ?>">Catat setoran</a></td>
                        </tr>
                     <?php endforeach; ?>
                     <?php if (empty($row)) : ?>
                        <tr>
                           <td colspan="6" style="text-align: center;">
                              <p class="nav-link">Data nasabah tidak di temukan / masih kosong</p>
                           </td>
                        </tr>
                     <?php endif; ?>
                  </tbody>
               </table>
               <div class="tambah-data justify-content-start">
                     <div class="col-5">
                        <a class="login text-decoration-none d-flex align-items-center justify-content-center text-dark" href="tambah.php">Tambah data baru</a>
                  </div>
               </div>
            </div>
      </section>
   </article>
</body>
<script src="js/index.js"></script>

</html>