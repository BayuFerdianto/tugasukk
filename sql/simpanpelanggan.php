<?php
include("koneksi.php");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$query = ("INSERT INTO pelanggan(nama_pelanggan,alamat,no_hp) 
VALUES('$nama','$alamat','$telp')");
$sql = mysqli_query($koneksi, $query);
if ($sql){
 echo"<script>alert('Data berhasil ditambahkan');
 window.location='../datapelanggan.php?nama='</script>";
}else{
 echo"data gagal ditambahkan";
}
?>