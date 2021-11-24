<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>MODUL3 ARA</title>

    <!--Navbar Start-->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="Ara_Home.php">
          <img src="images/logo-ead.png" width="130" height="35" class="d-inline-block align-text-top" />
        </a>
        <a href="Ara_AddBooks.php" style="text-decoration: none; color: green">
        <form class="d-flex">
          <button class="btn btn-outline-success me-2" type="button">Tambah Buku
          </a>
          </button>
          
        </form>
      </div>
    </nav>
    <!--Navbar End-->

  <body>
    <?php
    include "koneksi.php";
    $sql = "SELECT * FROM books_table";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result)>0){echo"harusnya muncul card-card namun tidak keburu, dan sudah pasrah :,))";}
    else{?>
      <div class="container text-center" style="padding-top: 100px; padding-bottom: 50px">
      <h2>Belum Ada Buku</h2>
      <div class="bg-success p-1 bg-opacity-50"></div>
      <p style="padding-top: 20px">Silahkan Menambahkan Buku</p>
    </div>
    <?php }?>
    

  </body>
</html>

<?php include "Ara_Footer.php"?>