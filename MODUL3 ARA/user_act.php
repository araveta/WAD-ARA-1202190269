<?php include "koneksi.php";
    if(isset($_POST['submit']))
    {
        $judul_buku=$_POST['judul_buku'];
        $penulis_buku=$_POST['penulis_buku'];
        $tahun_terbit=$_POST['tahun_terbit'];
        $deskripsi=$_POST['deskripsi'];
        $tag=$_POST['tag'];
        $gambar=$_FILES['gambar']['name'];
        $bahasa=$_POST['bahasa'];
        $temp = $_FILES['gambar']['tmp_name'];
        $uploads_dir = "images/";
        $simpan=mysqli_query($koneksi,"insert into Books_table (judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) values ('$judul', '$penulis', '$tahun', '$deskripsi', '$gambar', '$tag', '$bahasa')");
        
        if($simpan) {
            move_uploaded_file($temp, $uploads_dir.$gambar);
            header('location:Gregorius_Home.php');
        }
            else {
            echo "
                SERVER ERROR
            ";  
        }
    }
?>