<?php 
include 'koneksi.php';
$judul_buku = $_POST['judul_buku'];
$penulis_buku = $_POST['penulis_buku'];
$tahun_terbit = $_POST['tahun_terbit'];
$deskripsi = $_POST['deskripsi'];
$matkul = $_POST['tag'];
$tag = implode(" ", $matkul);
$bahasa = $_POST['bahasa'];


$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$gambar = $rand.'_'.$filename;
move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$gambar);
echo $gambar;	

$insert = "INSERT INTO books_table (judul_buku, penulis_buku, tahun_terbit, deskripsi, tag, bahasa, gambar) 
VALUES ('$judul_buku', '$penulis_buku', '$tahun_terbit', '$deskripsi', '$tag', '$bahasa','$gambar')";


if (mysqli_query($koneksi, $insert)) {
	echo "New record created successfully";
  } else {
	echo "Error: " . $insert . "<br>" . mysqli_error($koneksi);
  }

?>