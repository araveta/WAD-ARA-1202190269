<?php include "Ara_Header.php"?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  </head>

  <body>
    <!--Form Start-->
  <section>
    <form action="user_act.php" method="post" enctype="multipart/form-data">
      <div style="background-color: whitesmoke; margin-top: 50px; margin-bottom: 50px; margin-right: 80px; margin-left: 80px">
        <div class="container" style="padding-top: 50px; padding-bottom: 50px">
          <center>
            <h1>Tambah Data Buku</h1>
          </center>
          <div class="mb-3">
            <label class="form-label fw-bold">Judul Buku</label>
            <input type="text" class="form-control" name="judul_buku" placeholder="Contoh: Pemrograman Web Bersama EAD" required="required" />
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Penulis</label>
            <input class="form-control" type="text" name="penulis_buku" value="Ara_1202190269" aria-label="Disabled input readonly" disabled readonly />
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" placeholder="Contoh: 2001" required="required" />
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="3" required="required" placeholder="Contoh: Buku ini menjelaskan tentang ..."></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold col-1">Bahasa</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="bahasa"  value="Indonesia" required="required">
             <label class="form-check-label" >Indonesia</label>
            </div>
            <div class="form-check form-check-inline mb-3">
              <input class="form-check-input" type="radio" name="bahasa"  value="Lainnya" required="required">
              <label class="form-check-label" >Lainnya</label>
            </div>

          <div class="mb-3">
            <label class="form-label fw-bold col-1">Tag</label>
            <div class="form-check-inline">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tag[]" value="Pemrograman" />
                <label class="form-check-label">Pemrograman</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tag[]" value="Website" />
                <label class="form-check-label">Website</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tag[]" value="Java" />
                <label class="form-check-label">Java</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tag[]" value="OOP" />
                <label class="form-check-label">OOP</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tag[]" value="MVC" />
                <label class="form-check-label">MVC</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tag[]" value="Kalkulus" />
                <label class="form-check-label">Kalkulus</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tag[]" value="Lainnya" />
                <label class="form-check-label">Lainnya</label>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label class="form-label fw-bold">Gambar</label>
            <input class="form-control" type="file" name="gambar" required="required" />
            <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
          </div>
          <center>
            <button type="submit" name="submit" class="btn btn-primary col-5">+ TAMBAH</button>
          </center>
        </div>
      </div>
    </form>
</section>
    <!--Form End-->
  </body>
<?php include "Ara_Footer.php"?>
</html>
