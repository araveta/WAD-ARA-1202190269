<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODUL4 ARA</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color:#fbefd5">
    <?php include "header.php"?>

    <main>
    <?php
       if(!isset($_SESSION)) 
       { 
           session_start(); 
       } 
 
        if (isset($_SESSION['username'])) {?>
            <div class="alert alert-success" role="alert">
                Logged in!
            </div>
        <?php } ?>

        <form method="POST" action="testform.php">
            <div class="container">
                <div class="container bg-success text-center p-5">
                    <h1>EAD Travel</h1>
                </div>
                <div class="card-group">
                    <div class="card">
                        <img src="bromo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gunung Bromo, Malang </h5>
                            <p class="card-text">Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama
                                dalam
                                agama Hindu) atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif
                                di
                                Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut
                                dan
                                berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan,
                                Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata
                                utama
                                di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya
                                sebagai
                                gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo
                                Tengger Semeru.</p>
                            <hr>
                            <p class="card-text fw-bold">Rp. 4.000.000</p>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" id="price" name="price" value="4000000">
                            <button class="w-100 btn btn-primary " data-toggle="modal" data-target="#bookingModal"
                                type="button">Pesan Tiket</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="rinjani.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gunung Rinjani, Lombok</h5>
                            <p class="card-text">Gunung Rinjani adalah gunung yang berlokasi di Pulau Lombok, Nusa
                                Tenggara
                                Barat. Gunung yang merupakan gunung berapi kedua tertinggi di Indonesia dengan
                                ketinggian
                                3.726 mdpl ini merupakan gunung favorit bagi pendaki Indonesia karena keindahan
                                pemandangannya. Gunung ini merupakan bagian dari Taman Nasional Gunung Rinjani yang
                                memiliki
                                luas sekitar 41.330 ha dan ini akan diusulkan penambahannya sehingga menjadi 76.000 ha
                                ke
                                arah barat dan timur. </p>
                            <hr>
                            <p class="card-text fw-bold">Rp. 5.000.000</p>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" id="price" name="price" value="5000000">
                            <button class="w-100 btn btn-primary " data-toggle="modal" data-target="#bookingModal"
                                type="button">Pesan Tiket</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="kelimutu.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gunung Kelimutu, Flores</h5>
                            <p class="card-text">Gunung Kelimutu adalah gunung berapi yang terletak di Pulau Flores,
                                Provinsi NTT, Indonesia.
                                Lokasi gunung ini tepatnya di Desa Pemo, Kecamatan Kelimutu, Kabupaten Ende.
                                Gunung ini memiliki tiga buah kawah danau di puncaknya. Danau ini dikenal dengan nama
                                Danau
                                Tiga Warna karena memiliki tiga warna yang berbeda, yaitu merah, biru, dan putih.
                                Walaupun
                                begitu, warna-warna tersebut selalu berubah-ubah seiring dengan perjalanan waktu.</p>
                            <hr>
                            <p class="card-text fw-bold">Rp. 6.000.000</p>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" id="price" name="price" value="6000000">
                            <button class="w-100 btn btn-primary " data-toggle="modal" data-target="#bookingModal"
                                type="button">Pesan Tiket</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL-->

            <div class="modal" tabindex="-1" role="dialog" id="bookingModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p>Travel Date</p>

                            <label for="travelDate"></label>
                            <input type="date" id="travelDate" name="travelDate">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <?php include "footer.php"?>


</body>

</html>