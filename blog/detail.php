<?php
require "apps/init.php";
if (!isset($_SESSION['login'])) {
   header("location:login.php");
   exit;
}

$id = $_GET['detail'];
$q1 = "SELECT * FROM data WHERE id = '$id'";
$q2 = mysqli_query($conn, $q1);
$q2 = mysqli_fetch_assoc($q2);

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
   <link rel="stylesheet" href="css/detail.css">
   <title>Rincian data nasabah</title>
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
                        <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                     </ul>
                  </li>
               </ul>
               <form class="d-flex" role="search" method="post">
                  <input name="detailCari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
               </form>
            </div>
         </div>
      </nav>
      <section id="container">
         <div class="row mt-5 d-flex justify-content-center">
            <h1 class="text-center">Catat setoran nasabah</h1>
            <div class="col-md-5">
               <table class="table table-striped table-bordered" border="" cellspacing="0">
                  <thead>
                     <tr class="bg-primary">
                        <th class="bg-primary" rowspan="2">Nama</th>
                        <?php if (empty($detail['nama'])) : ?>
                           <th colspan="7">Nama tidak ditemukan</th>
                        <?php else : ?>
                           <th class="text-center bg-primary" colspan="7">Catatan cicilan nasabah <?php echo $detail['nama']; ?></th>
                        <?php endif; ?>
                        <th class="text-center bg-primary" rowspan="2" colspan="2">aksi</th>

                     </tr>
                     <tr>
                        <td class="bg-primary">h1</td>
                        <td class="bg-primary">h2</td>
                        <td class="bg-primary">h3</td>
                        <td class="bg-primary">h4</td>
                        <td class="bg-primary">h5</td>
                        <td class="bg-primary">h6</td>
                        <td class="bg-primary">h7</td>
                     </tr>
                     <thead>
                     <tbody>
                        <?php foreach ($m as $row) : ?>
                           <tr>
                              <td><?php echo $row['nama'] ?></td>
                              <td><?php echo $row['h1'] ?></td>
                              <td><?php echo $row['h2'] ?></td>
                              <td><?php echo $row['h3'] ?></td>
                              <td><?php echo $row['h4'] ?></td>
                              <td><?php echo $row['h5'] ?></td>
                              <td><?php echo $row['h6'] ?></td>
                              <td><?php echo $row['h7'] ?></td>
                              <td class="update" style="cursor :pointer;" id="<?php echo $row['id'] ?>">
                              <a class="text-decoration-none text-dark nav-link" href="update.php?update=<?php echo $row['id']?>&&status=<?php echo $q2['status']?>&&Id=<?php echo $id?>">Update </a></td>
                           
                           </tr>
                        <?php endforeach; ?>
                        <?php if (empty($row)) : ?>
                           <tr>
                              <td colspan="10" style="text-align: center;">
                                 <p class="nav-link" >Catatan setoran masih kosong</p>
                              </td>
                           </tr>
                        <?php endif; ?>
                     </tbody>
               </table>
               <div class="justify-content-start">
                     <div class="col-5">
                        <button type="button" class="btnSetoran login text-decoration-none d-flex align-items-center justify-content-center text-dark">Catat setoran</a>
                  </div>
               </form>
               <div class="formTambah col-md-12 mt-5 ml-5">
                  <form action="" method="post">
                     <table class="table table-striped" border="0" cellspacing="0px">
                        <thead>
                           <p class="btn-x" style="float:right; margin:0px 0px 0px; cursor:pointer; color:red;">x</p>
                           <tr>
                              <td class="bg-primary" colspan="2">
                                 <p class="nav-link text-center">Tambah data</p>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="">Nama </td>
                              <td><input autocapitalize="r" maxlength="25" autocomplete="off" type="text" name="nama" style="max-width: 100%;" required></td>
                           </tr>
                           <tr>
                              <td colspan="">setoran1</td>
                              <td><input maxlength="20" autocomplete="off" type="text" name="setoran1" style="max-width: 100%;" required></td>
                           </tr>
                           <tr>
                              <td colspan="">setoran2</td>
                              <td><input maxlength="20" autocomplete="off" type="text" name="setoran2" style="max-width: 100%;" required></td>
                           </tr>
                           <tr>
                              <td colspan="">setoran3</td>
                              <td><input maxlength="20" autocomplete="off" type="text" name="setoran3" style="max-width: 100%;" required></td>
                           </tr>
                           <tr>
                              <td colspan="">setoran4</td>
                              <td><input maxlength="20" autocomplete="off" type="text" name="setoran4" style="max-width: 100%;" required></td>
                           </tr>
                           <tr>
                              <td colspan="">setoran5</td>
                              <td><input autocomplete="off" type="text" name="setoran5" style="max-width: 100%;" required></td>
                           </tr>
                           <tr>
                              <td colspan="">setoran6</td>
                              <td><input maxlength="20" autocomplete="off" type="text" name="setoran6" style="max-width: 100%;" required></td>
                           </tr>
                           <tr>
                              <td colspan="">setoran7</td>
                              <td><input maxlength="20" autocomplete="off" type="text" name="setoran7" style="max-width: 100%;" required></td>
                           </tr>
                           <tr>
                              <td colspan="2"><button class="btn bg-primary text-white" name="tambahCicilan" style="cursor: pointer;" type="submit">kirim</button></td>
                           </tr>
                           <tr>
                              <td><input required type="hidden" autocomplete="off" type="text" name="kode" value="<?php echo $detail['id'] ?>" style="max-width: 100%;"></td>
                              <td></td>
                           </tr>
                        </thead>
                     </table>
                  </form>
               </div>
            </div>

            <!-- form tambah -->
      </section>
   </article>
</body>
<script src="js/detail.js"></script>

</html>