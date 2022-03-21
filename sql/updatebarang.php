<?php
include("koneksi.php");
$id = $_GET['id'];
$nama = $_POST['kode'];
$harga = $_POST['nama'];
$tgl = $_POST['kategori'];
$supplier = $_POST['hargabeli'];
$status = $_POST['hargajual'];
$query = ("UPDATE produk SET kode_produk = '$nama', nama_produk = '$harga', kategori = '$tgl', harga_beli = '$supplier', 
harga_jual = '$status' where id_produk ='$id'");
$sql = mysqli_query($koneksi, $query);
if ($sql){
 echo"<script>alert('Data berhasil ditambahkan');
 window.location='../databarang.php?nama='</script>";
}else{
 echo"data gagal ditambahkan";
}
?>