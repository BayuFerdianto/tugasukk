<?php
include("koneksi.php");
$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$query = ("UPDATE pelanggan SET nama_pelanggan = '$nama', alamat = '$alamat', no_hp = '$telp' where id_pelanggan ='$id'");
$sql = mysqli_query($koneksi, $query);
if ($sql){
 echo"<script>alert('Data berhasil ditambahkan');
 window.location='../datapelanggan.php?nama='</script>";
}else{
 echo"data gagal ditambahkan";
}
?>