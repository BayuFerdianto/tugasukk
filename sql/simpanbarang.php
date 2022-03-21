<?php
include("koneksi.php");
$nama = $_POST['kode'];
$harga = $_POST['nama'];
$tgl = $_POST['kategori'];
$supplier = $_POST['hargabeli'];
$status = $_POST['hargajual'];
$query = ("INSERT INTO produk(kode_produk,nama_produk,kategori,harga_beli,harga_jual) 
VALUES('$nama','$harga','$tgl','$supplier','$status')");
$sql = mysqli_query($koneksi, $query);
if ($sql){
 echo"<script>alert('Data berhasil ditambahkan');
 window.location='../databarang.php?nama='</script>";
}else{
 echo"data gagal ditambahkan";
}
?>