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

   <title>Ubah data</title>
</head>

<body>
   <article>
      <section id="navbar">
         <nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
            <div class="container-fluid p-2 ">
               <a class="navbar-brand" href="index.php">Pinjaman</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarScroll">
                  <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                     <li class="nav-item dropdown">
                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Menu
                        </a>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                           <li><a class="dropdown-item" href="logout.php">Log out</a></li>
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
      </section>
      <section id="container">
         <div class="row mt-5 d-flex justify-content-center">
            <!-- form update -->
            <div class="col-md-5">
               <form action="" method="post">
                  <table class="table table-striped table-bordered" border="0" cellspacing="0px">
                     <thead>
                        <a href="index.php">
                           <p class="btn-x-update" style="float:right; margin:0px 5px 10px; cursor:pointer; color:red;">x</p>
                        </a>
                        <tr>
                           <td class="bg-primary" colspan="2">
                              <p class="nav-link text-center">Update data</p>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="">nama</td>
                           <td>
                              <input class="inputUpdate" maxlength="25" autocomplete="off" type="text" name="nama" value="<?php echo $detailupdate['nama'] ?>" style="max-width: 100%;" required>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="">setoran1</td>
                           <td><input maxlength="20" autocomplete="off" type="text" name="setoran1" value="<?php echo $detailupdate['h1'] ?>" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">setoran2</td>
                           <td><input maxlength="20" autocomplete="off" type="text" name="setoran2" value="<?php echo $detailupdate['h2'] ?>" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">setoran3</td>
                           <td><input maxlength="20" autocomplete="off" type="text" name="setoran3" value="<?php echo $detailupdate['h3'] ?>" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">setoran4</td>
                           <td><input maxlength="20" autocomplete="off" type="text" name="setoran4" value="<?php echo $detailupdate['h4'] ?>" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">setoran5</td>
                           <td><input maxlength="20" autocomplete="off" type="text" name="setoran5" value="<?php echo $detailupdate['h5'] ?>" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">setoran6</td>
                           <td><input maxlength="20" autocomplete="off" type="text" name="setoran6" value="<?php echo $detailupdate['h6'] ?>" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">setoran7</td>
                           <td><input maxlength="20" autocomplete="off" type="text" name="setoran7" value="<?php echo $detailupdate['h7'] ?>" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="">Status</td>
                           <td><input maxlength="30" autocomplete="off" type="text" name="status" value="<?php echo $_GET['status'] ?>" style="max-width: 100%;" required></td>
                        </tr>
                        <tr>
                           <td colspan="2">
                           <button class="btn-update login text-dark" name="btnUpdate" type="submit" style="cursor: pointer;" >Update</button></td>
                        </tr>
                        <tr>
                           <td></td>
                           <td><input required type="hidden" autocomplete="off" type="text" name="id" value="<?php echo $detailupdate['id'] ?>" style="max-width: 100%;"></td>
                        </tr>
                     </thead>
                  </table>
               </form>
            </div>
         </div>
      </section>
   </article>
</body>
<script src="js/index.js">
</script>

</html>